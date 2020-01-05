<?php

namespace App\Controller;

use App\Entity\Hourrate;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class HourrateController extends AbstractController
{
    /**
     * @Route("/hourrates", name="hourrate")
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
        $repository = $this->getDoctrine()->getRepository(Hourrate::class);
        $hourrates = $repository->findBy(
            array(),
            array('Price' => 'ASC')
        );
        return $this->render('hourrate/index.html.twig', [
            'controller_name' => 'HourrateController',
            'rates' => $hourrates,
        ]);
    }
     /**
     * @Route("/edit-hourrate/{id}", name="edit-hourrate")
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
        $rate = $manager->getRepository(Hourrate::class)->find($id);
        $form = $this->createFormBuilder($rate)
        ->add('Price', TextType::class)
        ->add('Submit', SubmitType::class)
        ->getForm();
        if ($request->getMethod() == 'POST') {
            $data = $request->request->get('form');
            $rate->setPrice($data['Price']);
            $manager->flush();
            return $this->redirectToRoute('hourrates');

        }
        return $this->render('hourrate/edit.html.twig', [
            'controller_name' => 'HourrateController',
            'form' => $form->createView(),
        ]);
    }
     /**
     * @Route("/add-hourrate", name="add-hourrate")
     */
    public function add(TokenStorageInterface $tokenStorage, Request $request)
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
        $rate = new Hourrate();
        $form = $this->createFormBuilder($rate)
        ->add('Price', TextType::class)
        ->add('Submit', SubmitType::class)
        ->getForm();
        if ($request->getMethod() == 'POST') {
            $manager = $this->getDoctrine()->getManager();
            $data = $request->request->get('form');
            // Need to do something with the data here
            $rate->setPrice($data['Price']);
            $manager->persist($rate);
            $manager->flush();
            return $this->redirectToRoute('hourrates');

        }
        return $this->render('hourrate/add.html.twig', [
            'controller_name' => 'HourrateController',
            'form' => $form->createView(),  
        ]);
    }
     /**
     * @Route("/delete-hourrate/{id}", name="delete-hourrate")
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
        $rate = $manager->getRepository(Hourrate::class)->find($id);
        $manager->remove($rate);
        $manager->flush();
        return $this->redirectToRoute('hourrates');
    }
}
