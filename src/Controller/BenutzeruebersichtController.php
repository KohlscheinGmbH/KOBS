<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Menu;

class BenutzeruebersichtController extends AbstractController
{
    /**
     * @Route("/benutzeruebersicht", name="benutzeruebersicht")
     */
    public function index()
    {
		$Benutzer = $this->getDoctrine()->getRepository('App:MENU')->findAll();			
		
        return $this->render('benutzeruebersicht/index.html.twig', [
            'controller_name' => 'BenutzeruebersichtController',
			'Benutzer' => $Benutzer,
			]);
    }
}
