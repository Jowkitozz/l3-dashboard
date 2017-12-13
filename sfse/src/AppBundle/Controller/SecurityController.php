<?php
// src/Controller/SecurityController.php
namespace AppBundle\Controller;


// src/Controller/SecurityController.php

// ...
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Routing\Annotation\route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SecurityController extends Controller
{
  /**
  * @Route("/login", name="login")
  */
  public function loginAction(Request $request, AuthenticationUtils $authUtils)
  {
    // get the login error if there is one
    $error = $authUtils->getLastAuthenticationError();

    // last username entered by the user
    $lastUsername = $authUtils->getLastUsername();

    return $this->render('default/login.html.twig', array(
      'last_username' => $lastUsername,
      'error'         => $error,
    ));
  }
}
