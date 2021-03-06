<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TbController extends AbstractController
{
    /**
     * @Route("/tb", name="tb")
     */
    public function index()
    {
        return $this->render('tb/index.html.twig', [
            'controller_name' => 'TbController',
        ]);
    }
}
