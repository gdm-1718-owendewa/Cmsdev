<?php

namespace App\Controller;
use App\Entity\Tasks;
use App\Entity\User;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class FunctionController extends AbstractController
{
    /**
     * @Route("/mail/{days}/{id}", name="mail", methods={"GET"})
     */
    public function mail($days, $id, MailerInterface $mailer,TokenStorageInterface $tokenStorage)
    {
        $usr = $tokenStorage->getToken()->getUser();
        if($usr =='anon.'){
           return $this->redirect('/login');
        }else{
            if($usr->getPosition() =='Admin'||$usr->getPosition() =='User'){
                
            }else{
                return $this->redirect('/');
            }
        }
        $manager = $this->getDoctrine()->getManager();
        $owner = $manager->getRepository(User::class)->findBy(
            ['Function' => 'Owner'],
        );
        $currentuser = $manager->getRepository(User::class)->find($id);
        $now = new \DateTime();
        $thirtyDaysAgo = $now->sub(new \DateInterval("P".$days."D"));
        $qb = $manager->createQueryBuilder();
        if($currentuser->getFunction() == "Client"){
            $qb->select('e')
            ->from(Tasks::class,'e')
            ->where('e.Client_id = '.$currentuser->getId())
            ->andWhere($qb->expr()->between(
                        'e.Start',
                        ':from',
                        ':to'
                    )
                )
            ->setParameters(array('from' => $thirtyDaysAgo, 'to' => new \DateTime()));
        }else{
            $qb->select('e')
            ->from(Tasks::class,'e')
            ->where('e.Employee_id = '.$currentuser->getId())
            ->andWhere($qb->expr()->between(
                        'e.Start',
                        ':from',
                        ':to'
                    )
                )
            ->setParameters(array('from' => $thirtyDaysAgo, 'to' => new \DateTime()));
        }
        $tasks = $qb->getQuery()->getResult();
        $prices = [];
        foreach($tasks as $task){
            $taskuser = $manager->getRepository(User::class)->find($task->getEmployeeId());
            $day = $task->getCurrentday();
            $timeworked = $task->getDatediff();
            $traveldistance = $task->getTraveldistance();
            $hourrate = $taskuser->getHourrate();
            $travelrate = $taskuser->getTransportrate();

            if($day == "Sun"){
                $uren = $timeworked*$hourrate*2;
                $afstand = $traveldistance * $traveldistance;
                $price = $uren + $afstand;
            }
            else if($day == "Sat"){
                $price = $timeworked*$hourrate*1.5 + ($traveldistance * $traveldistance);
            }else{
                if($timeworked > 8){
                    $overhours = ($timeworked - 8) * ($hourrate*1.2);
                    $normalhours = 8 * $hourrate;
                    $price = ($overhours + $normalhours) + ($traveldistance * $traveldistance);
                }else{
                    $price = ($timeworked * $hourrate) + ($traveldistance * $traveldistance);
                }
            }
            array_push($prices, ["id" => $task->getId(), "price" => $price]);

        }
        $message = (new TemplatedEmail())
        ->from("abustering841@gmail.com")
        ->to($currentuser->getEmail())
        ->htmlTemplate('functions/email.html.twig')
        ->context([
            'controller_name' => 'FunctionController',
            'tasks' => $tasks,
            'User' => $currentuser->getName(),
            'prices' => $prices
            ]);
    
        $mailer->send($message);
        return $this->redirect('/tasks/'. $id);

    }
    /**
     * @Route("/pdf/{days}/{id}", name="pdf")
     */
    public function pdf($days, $id,TokenStorageInterface $tokenStorage)
    {
        $usr = $tokenStorage->getToken()->getUser();
        if($usr =='anon.'){
           return $this->redirect('/login');
        }else{
            if($usr->getPosition() =='Admin' || $usr->getFunction() =='Client'){
                
            }else{
                return $this->redirect('/');
            }
        }
        $manager = $this->getDoctrine()->getManager();
        $owner = $manager->getRepository(User::class)->findBy(
            ['Function' => 'Owner'],
        );
        $currentuser = $manager->getRepository(User::class)->find($id);
        $now = new \DateTime();
        $thirtyDaysAgo = $now->sub(new \DateInterval("P".$days."D"));
        $qb = $manager->createQueryBuilder();
        if($currentuser->getFunction() == "Client"){
            $qb->select('e')
            ->from(Tasks::class,'e')
            ->where('e.Client_id = '.$currentuser->getId())
            ->andWhere($qb->expr()->between(
                        'e.Start',
                        ':from',
                        ':to'
                    )
                )
            ->setParameters(array('from' => $thirtyDaysAgo, 'to' => new \DateTime()));
        }else{
            $qb->select('e')
            ->from(Tasks::class,'e')
            ->where('e.Employee_id = '.$currentuser->getId())
            ->andWhere($qb->expr()->between(
                        'e.Start',
                        ':from',
                        ':to'
                    )
                )
            ->setParameters(array('from' => $thirtyDaysAgo, 'to' => new \DateTime()));
        }
        $tasks = $qb->getQuery()->getResult();
        $prices = [];
        foreach($tasks as $task){
            $taskuser = $manager->getRepository(User::class)->find($task->getEmployeeId());
            $day = $task->getCurrentday();
            $timeworked = $task->getDatediff();
            $traveldistance = $task->getTraveldistance();
            $hourrate = $taskuser->getHourrate();
            $travelrate = $taskuser->getTransportrate();

            if($day == "Sun"){
                $uren = $timeworked*$hourrate*2;
                $afstand = $traveldistance * $traveldistance;
                $price = $uren + $afstand;
            }
            else if($day == "Sat"){
                $price = $timeworked*$hourrate*1.5 + ($traveldistance * $traveldistance);
            }else{
                if($timeworked > 8){
                    $overhours = ($timeworked - 8) * ($hourrate*1.2);
                    $normalhours = 8 * $hourrate;
                    $price = ($overhours + $normalhours) + ($traveldistance * $traveldistance);
                }else{
                    $price = ($timeworked * $hourrate) + ($traveldistance * $traveldistance);
                }
            }
            array_push($prices, ["id" => $task->getId(), "price" => $price]);

        }
        
        $dompdf = new Dompdf();
        $html = $this->renderView('functions/pdf.html.twig', [
            'tasks' => $tasks,
            'User' => $currentuser->getName(),
            'prices' => $prices
        ]);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->set_option('isHtml5ParserEnabled', true);
        
        $dompdf->render();
        $dompdf->stream("task.pdf", [
            "Attachment" => false,
        ]);
        return new Response('response');
    }
}
