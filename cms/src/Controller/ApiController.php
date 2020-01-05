<?php

namespace App\Controller;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Tasks;
use App\Entity\User;
use App\Entity\Hourrate;
use App\Entity\Transportrate;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\Encoder\EncoderAwareInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use \DateTime as DT;



class ApiController extends AbstractController
{
    /**
     * @Route("/api/auth", name="api-auth")
     * @Method("POST")
     */
    public function Token(Request $request, UserPasswordEncoderInterface $passwordEncoder){
        
    }
    /**
     * @Route("/api", name="api" ,methods={"GET"})
     */
    public function index()
    {
        $encoders = [new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];
        $serializer = new Serializer($normalizers, $encoders);
        $users = $this->getDoctrine()->getRepository(User::class)->findAll();
        $tasks = $this->getDoctrine()->getRepository(Tasks::class)->findAll();
        $hourrates = $this->getDoctrine()->getRepository(Hourrate::class)->findAll();
        $transportrates = $this->getDoctrine()->getRepository(Transportrate::class)->findAll();
        $data = array(
            'users' => $users,
            'tasks' => $tasks,
            'hourrates' => $hourrates,
            'transportrates' => $transportrates,
        );
        $response = new Response($serializer->serialize($data, 'json'));
        return $response;
    }
    /**
     * @Route("/api/users", name="api-users" ,methods={"GET"})
     */
    public function users()
    {
        $encoders = [new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];
        $serializer = new Serializer($normalizers, $encoders);
        $users = $this->getDoctrine()->getRepository(User::class)->findAll();
        $data = array(
            'users' => $users,
        );
        $response = new Response($serializer->serialize($data, 'json'));
        return $response;
    }
    /**
     * @Route("/api/clients", name="api-clients" ,methods={"GET"})
     */
    public function clients()
    {
        $encoders = [new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];
        $serializer = new Serializer($normalizers, $encoders);
        $clients = $this->getDoctrine()->getRepository(User::class)->findBy(
            ['Function' => 'Client']
        );
        $data = array(
            'clients' => $clients,
        );
        $response = new Response($serializer->serialize($data, 'json'));
        return $response;
    }
    /**
     * @Route("/api/users/{name}", name="api-users-byname" ,methods={"GET", "POST"})
     */
    public function usersByName($name)
    {
        $encoders = [new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];
        $serializer = new Serializer($normalizers, $encoders);
        $user = $this->getDoctrine()->getRepository(User::class)->findBy(
            ['Name' => $name]
        );
        $data = array(
            'user' => $user,
        );
        $response = new Response($serializer->serialize($data, 'json'));
        return $response;
    }
        /**
     * @Route("/api/tasks", name="api-tasks" ,methods={"GET", "POST"})
     */
    public function tasks(Request $request)
    {
        if ($request->getMethod() == 'POST') {
            $data = json_decode($request->getContent(), true);
            $manager = $this->getDoctrine()->getManager();
            $task = New Tasks();
            $task->setEmployeeId($data['userId']);
            $task->setClientId($data['clientId']);
            $dateStart = new \DateTime($data['startdate']);
            $task->setStart($dateStart);
            $dateEnd = new \DateTime($data['enddate']);
            $task->setEnd($dateEnd);
            $task->setBreak($data['Break']);
            $task->setActivities($data['activities']);
            $task->setMaterials($data['materials']);
            $task->setCompanyId($data['clientId']);
            $task->setTraveldistance($data['traveldistance']);
            $datediff = date_diff($dateStart, $dateEnd);
            $interval = (new DT())->setTimestamp(0)->add($datediff)->getTimeStamp();
            $timeworked = (($interval/60) - $data['Break'])/60;
            $task->setDateDiff($timeworked);
            $task->setCurrentday($dateStart->format('D'));
            $manager->persist($task);
            $manager->flush();
            return new Response('posted');
        }
    }
    /**
     * @Route("/api/tasks/{userid}", name="api-tasks-byId" ,methods={"GET", "POST"})
     */
    public function tasksById($userid)
    {
        $encoders = [new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];
        $serializer = new Serializer($normalizers, $encoders);    
        $tasks = $this->getDoctrine()->getRepository(Tasks::class)->findBy(
            ['Employee_id' => $userid]
        );
         $data = array(
            'tasks' => $tasks,     
        );
        $response = new Response($serializer->serialize($data, 'json'));
        return $response;
    }
       /**
     * @Route("/api/tasks/task/{id}", name="api-tasks-bytaskId" ,methods={"GET", "POST"})
     */
    public function tasksBytaskId($id)
    {
        $encoders = [new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];
        $serializer = new Serializer($normalizers, $encoders);    
        $task = $this->getDoctrine()->getRepository(Tasks::class)->findBy(
            ['id' => $id]
        );
         $data = array(
            'task' => $task,     
        );
        $response = new Response($serializer->serialize($data, 'json'));
        return $response;
    }
    /**
     * @Route("/api/tasks/edit/{id}", name="api-tasks-edit" ,methods={"GET", "POST", "PUT"  })
     */
    public function tasksEdit($id, Request $request)
    {
        if ($request->getMethod() == 'POST') {

        $manager = $this->getDoctrine()->getManager();
        $data = json_decode($request->getContent(), true);
        $task = $this->getDoctrine()->getRepository(Tasks::class)->find($id);
        $task->setClientId($data['clientId']);
        $task->setBreak($data['Break']);
        $task->setMaterials($data['materials']);
        $task->setActivities($data['activities']);
        $task->setTraveldistance($data['traveldistance']);
        $manager->flush();
        return new Response('aangepast');
        }
    }
    /**
     * @Route("/api/tasks/delete/{id}", name="api-tasks-delete" ,methods={"GET", "POST", "DELETE"})
     */
    public function tasksDelete($id)
    {
        
        $task = $this->getDoctrine()->getRepository(Tasks::class)->find($id);
        $manager = $this->getDoctrine()->getManager();
        $manager->remove($task);
        $manager->flush();
        $response = new Response('task deleted');
        return $response;
    }
    /**
     * @Route("/api/hourrates", name="api-hourrates" ,methods={"GET"})
     */
    public function hourrates()
    {
        $encoders = [new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];
        $serializer = new Serializer($normalizers, $encoders);
       
        $hourrates = $this->getDoctrine()->getRepository(Hourrate::class)->findAll();
        $data = array(
            'hourrates' => $hourrates,      
        );
        $response = new Response($serializer->serialize($data, 'json'));
        return $response;
    }
    /**
     * @Route("/api/transportrates", name="api-transport" ,methods={"GET"})
     */
    public function transport()
    {
        $encoders = [new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];
        $serializer = new Serializer($normalizers, $encoders);  
        $transportrates = $this->getDoctrine()->getRepository(Transportrate::class)->findAll();
        $data = array(
            'transportrates' => $transportrates,
        );
        $response = new Response($serializer->serialize($data, 'json'));
        return $response;
    }
}
