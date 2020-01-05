<?php

namespace App\Controller;

use App\Entity\Tasks;
use App\Entity\User;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Messenger\HandleTrait;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use \DateTime as DT;


class TaskController extends AbstractController
{
    /**
     * @Route("/add-task", name="add-task")
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
        
        $task = New Tasks();
        $form = $this->createFormBuilder($task)
            ->add('EmployeeId', EntityType::class,[
                'label' => 'Employee',
                'class' => User::class,
                'query_builder' =>function(EntityRepository $er){
                    return $er->createQueryBuilder('u')
                    ->where('u.Function =:employee OR u.Function =:freelance')
                    ->setParameters(array('employee'=>'Employee', 'freelance'=> 'Freelance'));
                },
                'choice_label' => function(User $user){
                    return $user->getId(). ' ' .$user->getName();
                },
            ])
            ->add('ClientId', EntityType::class,[
                'label' => 'Client',
                'class' => User::class,
                'query_builder' =>function(EntityRepository $er){
                    return $er->createQueryBuilder('u')
                    ->where('u.Function =:klant')
                    ->setParameter('klant','Client');
                },
                'choice_label' => function(User $user){
                    return $user->getId(). ' ' .$user->getName();
                },
            ])
            ->add('Start', DateTimeType::class, [
                'label' => 'Start',
                'date_widget' => 'choice',
                'time_widget' => 'choice',
            ])  
            ->add('End', DateTimeType::class, [
                'label' => 'End',
                'date_widget' => 'choice',
                'time_widget' => 'choice',
            ])
            ->add('Break', TextType::class)
            ->add('Activities', TextareaType::class)
            ->add('Materials', TextareaType::class)
            ->add('Traveldistance', TextType::class)

            ->add('Submit', SubmitType::class)
            ->getForm();
            if ($request->getMethod() == 'POST') {
                $manager = $this->getDoctrine()->getManager();
                $data = $request->request->get('form');
                // Need to do something with the data here
                $task->setEmployeeId($data['EmployeeId']);
                $task->setClientId($data['ClientId']);
                $dateStart = $data['Start']['date']['year'].'-'.$data['Start']['date']['month'].'-'.$data['Start']['date']['day'] . ' ' . sprintf("%02d", $data['Start']['time']['hour']) .':'.sprintf("%02d", $data['Start']['time']['minute']).':00';
                $dateStart = DT::createFromFormat('Y-m-d H:i:s', $dateStart);
                $task->setStart($dateStart);
                $dateEnd = $data['End']['date']['year'].'-'.$data['End']['date']['month'].'-'.$data['End']['date']['day'] . ' ' . sprintf("%02d", $data['End']['time']['hour']) .':'.sprintf("%02d", $data['End']['time']['minute']).':00';
                $dateEnd = DT::createFromFormat('Y-m-d H:i:s', $dateEnd);
                $task->setEnd($dateEnd);
                $task->setBreak($data['Break']);
                $task->setActivities($data['Activities']);
                $task->setMaterials($data['Materials']);
                $task->setCompanyId($data['ClientId']);
                $task->setTraveldistance($data['Traveldistance']);
                $datediff = date_diff($dateStart, $dateEnd);
                $interval = (new DT())->setTimestamp(0)->add($datediff)->getTimeStamp();
                $timeworked = (($interval/60) - $data['Break'])/60;
                $task->setDateDiff($timeworked);
                $task->setCurrentday($dateStart->format('D'));
                $manager->persist($task);
                $manager->flush();
                return $this->redirectToRoute('tasks');

            }
        return $this->render('task/add.html.twig', [
            'controller_name' => 'TaskController',
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/edit-task/{id}", name="edit-task")
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
        $task = $manager->getRepository(Tasks::class)->find($id);
        $form = $this->createFormBuilder($task)
        ->add('EmployeeId', EntityType::class,[
            'label' => 'Employee',
            'class' => User::class,
            'query_builder' =>function(EntityRepository $er){
                return $er->createQueryBuilder('u')
                ->where('u.Function =:employee OR u.Function =:freelance')
                ->setParameters(array('employee'=>'Employee', 'freelance'=> 'Freelance'));
            },
            'choice_label' => function(User $user){
                return $user->getId(). ' ' .$user->getName();
            },
        ])
        ->add('ClientId', EntityType::class,[
            'label' => 'Client',
            'class' => User::class,
            'query_builder' =>function(EntityRepository $er){
                return $er->createQueryBuilder('u')
                ->where('u.Function =:klant')
                ->setParameter('klant','Client');
            },
            'choice_label' => function(User $user){
                return $user->getId(). ' ' .$user->getName();
            },
        ])
            ->add('Start', DateTimeType::class, [
                'label' => 'Start',
                'date_widget' => 'choice',
                'time_widget' => 'choice',
            ])  
            ->add('End', DateTimeType::class, [
                'label' => 'End',
                'date_widget' => 'choice',  
                'time_widget' => 'choice',
            ])
            ->add('Break', TextType::class)
            ->add('Activities', TextareaType::class)
            ->add('Materials', TextareaType::class)
            ->add('Traveldistance', TextType::class)

            ->add('Submit', SubmitType::class)
            ->getForm();
            if ($request->getMethod() == 'POST') {
                $data = $request->request->get('form');
                $task->setEmployeeId($data['EmployeeId']);
                $task->setClientId($data['ClientId']);
                $dateStart = $data['Start']['date']['year'].'-'.$data['Start']['date']['month'].'-'.$data['Start']['date']['day'] . ' ' . sprintf("%02d", $data['Start']['time']['hour']) .':'.sprintf("%02d", $data['Start']['time']['minute']).':00';
                $dateStart = DT::createFromFormat('Y-m-d H:i:s', $dateStart);
                $task->setStart($dateStart);
                $dateEnd = $data['End']['date']['year'].'-'.$data['End']['date']['month'].'-'.$data['End']['date']['day'] . ' ' . sprintf("%02d", $data['End']['time']['hour']) .':'.sprintf("%02d", $data['End']['time']['minute']).':00';
                $dateEnd = DT::createFromFormat('Y-m-d H:i:s', $dateEnd);
                $task->setEnd($dateEnd);
                $task->setBreak($data['Break']);
                $task->setActivities($data['Activities']);
                $task->setMaterials($data['Materials']);
                $task->setCompanyId($data['ClientId']);
                $task->setTraveldistance($data['Traveldistance']);
                $datediff = date_diff($dateStart, $dateEnd);
                $interval = (new DT())->setTimestamp(0)->add($datediff)->getTimeStamp();
                $timeworked = (($interval/60) - $data['Break'])/60;
                $task->setDateDiff($timeworked);
                $task->setCurrentday($dateStart->format('D'));
                $manager->flush();
                return $this->redirect('/tasks/'.$data['EmployeeId']);

        }
        return $this->render('task/edit.html.twig', [
            'controller_name' => 'TaskController',
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/delete-task/{id}", name="delete-task")
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
        $task = $manager->getRepository(Tasks::class)->find($id);
        $manager->remove($task);
        $manager->flush();
        return $this->redirectToRoute('tasks');

    }
    /**
     * @Route("/tasks", name="tasks")
     */
    public function tasks(TokenStorageInterface $tokenStorage )
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
        
        $users = $this->getDoctrine()->getRepository(User::class)->findAll();
       
        return $this->render('task/index.html.twig', [
            'controller_name' => 'TaskController',
            'users' => $users,
        ]);
    }
     /**
     * @Route("/tasks/{id}", name="user-tasks")
     */
    public function detail($id, TokenStorageInterface $tokenStorage, Request $request)
    {
        $usr = $tokenStorage->getToken()->getUser();
        if($usr =='anon.'){
           return $this->redirect('/login');
        }else{
            if($usr->getPosition() =='Admin' ){
                
            }else{
                return $this->redirect('/');
            }
        }
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
                return $this->redirect('/mail/'.$data['maildays'].'/'.$id);
            }else if(isset($data['pdfdays'])){
                return $this->redirect('/pdf/'.$data['pdfdays'].'/'.$id);
            }else{
                return new Response('Form is empty');
            }

        }
        $tasks = $this->getDoctrine()->getRepository(Tasks::class)->findBy(
            ['Employee_id' => $id]
        );
        
        return $this->render('task/detail.html.twig', [
            'controller_name' => 'TaskController',
            'tasks' => $tasks,
            'form' =>$form->createView(),
            'formpdf' =>$formpdf->createView(),
            'state' => $usr,
        ]);
    }
    /**
     * @Route("/tasks/client/{id}", name="client-tasks")
     */
    public function clientDetail($id, TokenStorageInterface $tokenStorage, Request $request)
    {
        $usr = $tokenStorage->getToken()->getUser();
        if($usr =='anon.'){
           return $this->redirect('/login');
        }else{
            if($usr->getFunction() =='Owner' || $usr->getFunction() =='Client'){
                
            }else{
                return $this->redirect('/');
            }
        }
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
                return $this->redirect('/mail/'.$data['maildays'].'/'.$id);
            }else if(isset($data['pdfdays'])){
                return $this->redirect('/pdf/'.$data['pdfdays'].'/'.$id);
            }else{
                return new Response('Form is empty');
            }
        }
        $tasks = $this->getDoctrine()->getRepository(Tasks::class)->findBy(
            ['Client_id' => $id]
        );
        
        return $this->render('task/detail.html.twig', [
            'controller_name' => 'TaskController',
            'tasks' => $tasks,
            'form' =>$form->createView(),
            'formpdf' =>$formpdf->createView(),
            'state' =>$usr,

        ]);
    }
}
