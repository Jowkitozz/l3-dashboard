<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {

      $entityManager = $this ->container
          ->get('doctrine.orm.entity_manager');
      $fiches = $entityManager
          ->getRepository('AppBundle:Fiche')
          ->findAll();

        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'fiches' => $fiches
        ]);
     }


     /**
      * @Route("/dashboard", name="dashboard")
      */
     public function dashboardAction(Request $request)
     {
       $db = $this->getDoctrine()->getManager();

       $fiches = $db->getRepository('AppBundle:Fiche')->findAll();
       $projet = $db->getRepository('AppBundle:Projet')->findAll();
       $manager = $db->getRepository('AppBundle:Manager')->findAll();

         // replace this example code with whatever you need
         return $this->render('default/dashboard.html.twig', [
             'fiches' => $fiches,
             'managers' => $manager,
             'projets' => $projet,
         ]);
     }


}
