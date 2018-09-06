<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class EDVKontaktController extends AbstractController
{
    /**
     * @Route("edvkontakt", name="edvkontakt")
     */
    public function index()
    {
        return $this->render('edv_kontakt/index.html.twig', [
            'controller_name' => 'EDVKontaktController',
        ]);
    }
}
