<?php

namespace App\Controller;

use App\Entity\Artistes;
use App\Entity\Festivals;
use App\Entity\Villes;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class InsertDataController extends Controller
{
    /**
     * @Route("/insert/data", name="insert_data")
     */
    public function index()
    {

        $em = $this->getDoctrine()->getManager();

        $Ville1 = new Villes();
        $Ville1->setNom("Brest");
        $Ville1->setLatitude("1.95848343");
        $Ville1->setLongitude("1.53489");
        $em->persist($Ville1);

        $Artiste1 = new Artistes();
        $Artiste1->setNom("Ganja");
        $em->persist($Artiste1);

        $Festival1 = new Festivals();
        $Festival1->setNom("gfezhf");
        $Festival1->setGenreMusical("fdsnjkf");
        $Festival1->setResume("fdsjif");
        $Festival1->setVilles($Ville1);
        $Festival1->addArtiste($Artiste1);
        $em->persist($Festival1);

        $em->Flush();



        return $this->render('insert_data/index.html.twig', [
            'controller_name' => 'InsertDataController',
        ]);
    }
}
