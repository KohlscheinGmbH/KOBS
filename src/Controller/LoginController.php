<?php

namespace App\Controller;

use App\Form\UserType;
use App\Entity\Menu;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class LoginController extends AbstractController
{
	/**
	 * @Route("/", name="index")
	 * @Route("/login", name="login")
	 */
	public function index(Request $request, AuthenticationUtils $authenticationUtils)
	{
		
		// get the login error if there is one
		$error = $authenticationUtils->getLastAuthenticationError();

		// last username entered by the user
		$lastUsername = $authenticationUtils->getLastUsername();

		return $this->render('login/index.html.twig', array(
			'last_username' => $lastUsername,
			'error'         => $error,
		));
	}
   
	/**
	* @Route("/logout", name="logout")
	*/
	public function logout(){}
}