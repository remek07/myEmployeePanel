<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OvertimeController extends AbstractController
{
    #[Route('/overtime', name: 'app_overtime')]
    public function index(): Response
    {
        return $this->render('overtime/index.html.twig', [
            'controller_name' => 'OvertimeController',
        ]);
    }
}
