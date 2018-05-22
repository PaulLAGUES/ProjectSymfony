<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MusicTypeController extends Controller
{
    /**
     * @Route("/music/type", name="music_type")
     */
    public function index()
    {
        return $this->render('music_type/index.html.twig', [
            'controller_name' => 'MusicTypeController',
        ]);
    }
}
