<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use \DateTime as DT;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use App\Entity\Tasks;
use App\Entity\User;

class PageController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(TokenStorageInterface $tokenStorage, Request $request )
    {
        
        $usr = $tokenStorage->getToken()->getUser();
        $manager = $this->getDoctrine()->getManager();
        $qb = $manager->createQueryBuilder();
        if($usr != 'anon.'){
            $qb->select('e') ->from(Tasks::class,'e')->where('e.Client_id = '.$usr->getId())->setMaxResults(2);
            $cientTasks = $qb->getQuery()->getResult();
        }
        $qb2 = $manager->createQuery(
            'SELECT p
            FROM App\Entity\Tasks p
            ORDER BY p.id DESC'
        )->setMaxResults(3);
        $qb3 = $manager->createQuery(
            'SELECT p
            FROM App\Entity\User p
            ORDER BY p.id DESC'
        )->setMaxResults(3);
        $defaultData = ['message' => 'Period form'];
        $form = $this->createFormBuilder($defaultData)
        ->add('maildays', TextType::class)
        ->add('send', SubmitType::class)
        ->getForm();
        $defaultpdfData = ['message' => 'Period form'];
        $formpdf = $this->createFormBuilder($defaultpdfData)
        ->add('pdfdays', TextType::class)
        ->add('send', SubmitType::class)
        ->getForm();
        if ($request->getMethod() == 'POST') {

            // data is an array with "name", "email", and "message" keys
            $data = $request->request->get('form');
            if(isset($data['maildays'])){
                return $this->redirect('/mail/'.$data['maildays'].'/'.$usr->getId());
            }else if(isset($data['pdfdays'])){
                return $this->redirect('/pdf/'.$data['pdfdays'].'/'.$usr->getId());
            }else{
                return new Response('Form is empty');
            }

        }
        if($usr != 'anon.'){

        return $this->render('home/index.html.twig', [
            'controller_name' => 'PageController',
            'state' => $usr,
            'form' =>$form->createView(),
            'formpdf' =>$formpdf->createView(),
            'cientTasks' =>$cientTasks,
            'recentTasks' =>$qb2->getResult(),
            'recentUsers' =>$qb3->getResult(),
        ]);
        }else{
        return $this->render('home/index.html.twig', [
            'controller_name' => 'PageController',
            'state' => $usr,
            'form' =>$form->createView(),
            'formpdf' =>$formpdf->createView(),
        ]);
        }
    }
    /**
     * @Route("/dashboard", name="dashboard")
     */
    public function dashboard()
    {
        return $this->render('dashboard.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }
}
