<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BenutzerController extends Controller
{
    /**
     * @Route("/menu/benutzer", name="benutzer")
     */
    public function index()
    {
        return $this->render('benutzer/index.html.twig', [
            'controller_name' => 'BenutzerController',
        ]);
    }
}
