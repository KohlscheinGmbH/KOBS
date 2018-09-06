<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Artikel;
use Symfony\Component\HttpFoundation\Request;

class ArtikelController extends AbstractController
{
    /**
     * @Route("/artikel", name="artikel")
     */
    public function index()
    {
		$Artikel = $this->getDoctrine()->getRepository('App:Artikel')->findById(0);			
		
        return $this->render('artikel/index.html.twig', [
			'Artikel' => $Artikel,
        ]);
    }
	
	/**
     * @Route("/artikel/bearbeiten", name="artikel_bearbeiten")
     */
	public function bearbeiten()	
    {
		 
//	    var_dump($params);
		
		$Artikel = $this->getDoctrine()->getRepository('App:Artikel')->findById(3);
		$Grunddaten = $this->getDoctrine()->getRepository('App:Grunddaten')->findById(3);		

		$Warengruppe = $this->getDoctrine()->getRepository('App:Warengruppe')->findAll();
		
        return $this->render('artikel/bearbeiten.html.twig', [
            'controller_name' => 'ArtikelController',			
			'Artikel' => $Artikel[0],
			'Grunddaten' => $Grunddaten[0],
			'Warengruppe' => $Warengruppe,
        ]);		
    }
}
