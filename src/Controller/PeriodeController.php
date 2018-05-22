<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PeriodeController extends Controller
{
    /**
     * @Route("/periode", name="periode")
     */
    public function index()
    {
        return $this->render('periode/index.html.twig', [
            'controller_name' => 'PeriodeController',
        ]);
    }
}
