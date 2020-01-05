<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Hourrate;
use App\Entity\Transportrate;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
class UserController extends AbstractController
{
    /**
     * @Route("/users", name="users")
     */
    public function index(TokenStorageInterface $tokenStorage)
    {
        $usr = $tokenStorage->getToken()->getUser();
        if($usr =='anon.'){
           return $this->redirect('/login');
        }else{
            if($usr->getPosition() =='Admin'){
                
            }else{
                return $this->redirect('/');
            }
        }
        
        $repository = $this->getDoctrine()->getRepository(User::class);
        $users = $repository->findBy(
            array(),
            array('Function' => 'ASC')
        );

        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
            'users' => $users,
        ]);
    }
     /**
     * @Route("/edit-user/{id}", name="edit-user")
     */
    public function edit($id, TokenStorageInterface $tokenStorage, Request $request)
    {
        $usr = $tokenStorage->getToken()->getUser();
        if($usr =='anon.'){
           return $this->redirect('/login');
        }else{
            if($usr->getPosition() =='Admin'){
                
            }else{
                return $this->redirect('/');
            }
        }
        $manager = $this->getDoctrine()->getManager();
        $user = $manager->getRepository(User::class)->find($id);
        $form = $this->createFormBuilder($user)
        ->add('Name', TextType::class)
        ->add('Email', TextType::class)
        ->add('Tel', TextType::class)
        ->add('Function', ChoiceType::class, [
            'choices' => [
                'Client' => 'Client',
                'Employee' => 'Employee',
                'Freelance' => 'Freelance',
            ]
        ])
        ->add('Position', ChoiceType::class, [
            'choices' => [
                'User' => 'User',
                'Admin' => 'Admin',
            ]
        ])
        ->add('active', ChoiceType::class, [
            'choices' => [
                'Yes' => true,
                'No' => false,
            ]
        ])
        ->add('hourrate', EntityType::class,[
            'label' => 'Hourrate',
            'class' => Hourrate::class,
            'query_builder' =>function(EntityRepository $er){
                return $er->createQueryBuilder('u');
            },
            'choice_label' => function(Hourrate $hourrate){
                return $hourrate->getPrice();
            },
        ])
        ->add('Transportrate', EntityType::class,[
            'label' => 'Transportrate',
            'class' => Transportrate::class,
            'query_builder' =>function(EntityRepository $er){
                return $er->createQueryBuilder('u');
            },
            'choice_label' => function(Transportrate $Transportrate){
                return $Transportrate->getPrice();
            },
        ])
        ->add('Submit', SubmitType::class)
        ->getForm();
        if ($request->getMethod() == 'POST') {
                $data = $request->request->get('form');
                $hourprice = $manager->getRepository(Hourrate::class)->find($data['hourrate']);
                $transportprice = $manager->getRepository(Transportrate::class)->find($data['Transportrate']);
                $user->setName($data['Name']);
                $user->setEmail($data['Email']);
                $user->setTel($data['Tel']);
                $user->setFunction($data['Function']);
                $user->setPosition($data['Position']);
                $user->setActive($data['active']);
                if($data['Function'] == 'Client'){
                    $user->setHourrate(0);
                    $user->setTransportrate(0);
                }else{
                    $user->setHourrate($hourprice->getPrice());
                    $user->setTransportrate($transportprice->getPrice());
                }
                $manager->flush();
                return $this->redirectToRoute('users');

        }
        return $this->render('user/edit.html.twig', [
            'controller_name' => 'UserController',
            'form' => $form->createView(),
        ]);
    }
     /**
     * @Route("/delete-user/{id}", name="delete-user")
     */
    public function delete($id, TokenStorageInterface $tokenStorage)
    {
        $usr = $tokenStorage->getToken()->getUser();
        if($usr =='anon.'){
           return $this->redirect('/login');
        }else{
            if($usr->getPosition() =='Admin'){
                
            }else{
                return $this->redirect('/');
            }
        }
        $manager = $this->getDoctrine()->getManager();
        $user = $manager->getRepository(User::class)->find($id);
        $manager->remove($user);
        $manager->flush();
        return $this->redirect('/users');
    }
}
