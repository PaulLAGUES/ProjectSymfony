<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GeolocalisationController extends Controller
{
    /**
     * @Route("/geolocalisation", name="geolocalisation")
     */
    public function index()
    {
        return $this->render('geolocalisation/geoloc.html.twig', [
            'controller_name' => 'GeolocalisationController',
        ]);
    }
}
