<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MenuController extends Controller
{
    /**
     * @Route("/menu", name="menu")
     */
    public function menu()
    {
        return $this->render('menu/index.html.twig', [
              'controller_name' => 'MenuController22',
        ]);
    }
}
