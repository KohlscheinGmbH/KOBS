<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Menu;
use Doctrine\ORM\Mapping as ORM;

class BenutzerverwaltungController extends AbstractController
{
    /**
     * @Route("/benutzerverwaltung", name="benutzerverwaltung")
     */
    public function index()
    {	
		$Benutzer = $this->getDoctrine()->getRepository('App:Menu')->findAll();
		
		
        return $this->render('benutzerverwaltung/index.html.twig', [
            'controller_name' => 'BenutzerverwaltungController',
			'Benutzer' => $Benutzer,
        ]);
    }
	

    /**
     * @Route("/update/{id}/{anrede}/{vorname}/{nachname}/{abteilung}", name="update")
     */
    public function updateAction($id, $anrede, $vorname, $nachname, $abteilung)
    {
        $em = $this->getDoctrine()->getManager();

        $post = $em->getRepository('App:Menu')->find($id);

        if (!$post) {
            throw $this->createNotFoundException('thats not a record');
        }

        /** @var $post RedditPost */
		$post->setAnrede($anrede);
        $post->setVorname($vorname);
		$post->setNachname($nachname);
		$post->setAbteilung($abteilung);
		
        $em->flush();

        return $this->redirectToRoute('benutzerverwaltung');
    }
	
	
	/**
     * @Route("/delete/{id}", name="delete")
     */
    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $post = $em->getRepository('App:Menu')->find($id);

        if (!$post) {
            return $this->redirectToRoute('benutzerverwaltung');
        }

        $em->remove($post);
        $em->flush();

        return $this->redirectToRoute('benutzerverwaltung');
    }
	
	
}
