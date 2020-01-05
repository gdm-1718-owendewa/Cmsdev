<?php

namespace App\Controller;

use App\Entity\Transportrate;

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


class TransportController extends AbstractController
{
    /**
     * @Route("/transportrates", name="transports")
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
        $repository = $this->getDoctrine()->getRepository(Transportrate::class);
        $transportrates = $repository->findBy(
            array(),
            array('Price' => 'ASC')
        );
        return $this->render('transport/index.html.twig', [
            'controller_name' => 'TransportController',
            'rates' => $transportrates,
        ]);
    }
    /**
     * @Route("/edit-transport/{id}", name="edit-transport")
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
        $rate = $manager->getRepository(Transportrate::class)->find($id);
        $form = $this->createFormBuilder($rate)
        ->add('Price', TextType::class)
        ->add('Submit', SubmitType::class)
        ->getForm();
        if ($request->getMethod() == 'POST') {
            $data = $request->request->get('form');
            $rate->setPrice($data['Price']);
            $manager->flush();
            return $this->redirectToRoute('transports');

        }
        return $this->render('transport/edit.html.twig', [
            'controller_name' => 'TransportController',
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/add-transport", name="add-transport")
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
        $rate = new Transportrate();
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
            return $this->redirectToRoute('transports');
        }
        return $this->render('transport/add.html.twig', [
            'controller_name' => 'TransportController',
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/delete-transport/{id}", name="delete-transport")
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
        $rate = $manager->getRepository(Transportrate::class)->find($id);
        $manager->remove($rate);
        $manager->flush();
        return $this->redirectToRoute('transports');
    }
}
