<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BestellungController extends AbstractController
{
    /**
     * @Route("/bestellung", name="bestellung")
     */
    public function index()
    {
        return $this->render('bestellung/index.html.twig', [
           
        ]);
    }
}
