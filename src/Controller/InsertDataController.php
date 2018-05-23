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


        $Ville2 = new Villes();
        $Ville2->setNom("Brest");
        $Ville2->setLatitude("48.390394");
        $Ville2->setLongitude("-4.486076");
        $em->persist($Ville2);

        $Ville3 = new Villes();
        $Ville3->setNom("Rennes");
        $Ville3->setLatitude("48.0833");
        $Ville3->setLongitude("-1.6833");
        $em->persist($Ville3);

        $Ville4 = new Villes();
        $Ville4->setNom("Quimper");
        $Ville4->setLatitude("47.997542");
        $Ville4->setLongitude("-4.097899");
        $em->persist($Ville4);

        $Ville5 = new Villes();
        $Ville5->setNom("Vannes");
        $Ville5->setLatitude("47.600000");
        $Ville5->setLongitude(" 5.833333");
        $em->persist($Ville5);

        $Ville6 = new Villes();
        $Ville6->setNom("Morlaix");
        $Ville6->setLatitude("48.5833");
        $Ville6->setLongitude("-3.8333");
        $em->persist($Ville6);

        $Artiste2 = new Artistes();
        $Artiste2->setNom("REMI PANOSSIAN");
        $em->persist($Artiste2);

        $Artiste3 = new Artistes();
        $Artiste3->setNom("EDOUARD RAVELOMANANTSOA ");
        $em->persist($Artiste3);

        $Artiste4 = new Artistes();
        $Artiste4->setNom("FESTEN QUARTET");
        $em->persist($Artiste4);

        $Artiste5 = new Artistes();
        $Artiste5->setNom("Miss Nickki");
        $em->persist($Artiste5);

        $Artiste6 = new Artistes();
        $Artiste6->setNom("The Memphis Soul Connection");
        $em->persist($Artiste6);

        $Festival1 = new Festivals();
        $Festival1->setNom("LES DEJANTES");
        $Festival1->setGenreMusical("ROCK");
        $Festival1->setResume("Marcellus Bastards / Pale Seas / The Rumjacks / HERMANN");
        $Festival1->setVilles($Ville2);
        $Festival1->addArtiste($Artiste2);
        $em->persist($Festival1);

        $Festival2 = new Festivals();
        $Festival2->setNom("WADADA");
        $Festival2->setGenreMusical("REGGAE");
        $Festival2->setResume("Le temps d'un week-end, face à l'océan, retentiront en pays d'Iroise les musiques");
        $Festival2->setVilles($Ville3);
        $Festival2->addArtiste($Artiste3);
        $em->persist($Festival2);

        $Festival3 = new Festivals();
        $Festival3->setNom("ASTROPOLIS");
        $Festival3->setGenreMusical("ELECTRONIC");
        $Festival3->setResume("festival de musiques électroniques à Brest : Astropolis.");
        $Festival3->setVilles($Ville4);
        $Festival3->addArtiste($Artiste2);
        $em->persist($Festival3);

        $Festival4 = new Festivals();
        $Festival4->setNom("MOTOCULTOR");
        $Festival4->setGenreMusical("METAL");
        $Festival4->setResume("Le fameux festival de métal de Saint Nolff, le Motocultor.");
        $Festival4->setVilles($Ville5);
        $Festival4->addArtiste($Artiste5);
        $em->persist($Festival2);

        $Festival5 = new Festivals();
        $Festival5->setNom("FESTIVAL DU ROI ARTHUR");
        $Festival5->setGenreMusical("MUSIQUES ACTUELLES");
        $Festival5->setResume("Le Festival du Roi Arthur revient avec une programmation toujours plus ambitieuse !");
        $Festival5->setVilles($Ville4);
        $Festival5->addArtiste($Artiste4);
        $em->persist($Festival5);

        $Festival6 = new Festivals();
        $Festival6->setNom("JAZZ A LETAGE");
        $Festival6->setGenreMusical("JAZZ");
        $Festival6->setResume("EDOUARD RAVELOMANANTSOA / PIERRICK PEDRON");
        $Festival6->setVilles($Ville3);
        $Festival6->addArtiste($Artiste3);
        $em->persist($Festival6);

        $Festival7 = new Festivals();
        $Festival7->setNom("CELTIC LEGENDS LORIENT");
        $Festival7->setGenreMusical("MUSIQUE CELTIQUE");
        $Festival7->setResume("Festival de musique celtique");
        $Festival7->setVilles($Ville6);
        $Festival7->addArtiste($Artiste2);
        $em->persist($Festival2);

        $Festival8 = new Festivals();
        $Festival8->setNom("SAMAIN FEST");
        $Festival8->setGenreMusical("MUSIQUE CELTIQUE");
        $Festival8->setResume("Festival de Soutien à l'école DIWAN de GUIPEL (Ecole Associative, Gratuite, Laïque");
        $Festival8->setVilles($Ville5);
        $Festival8->addArtiste($Artiste4);
        $em->persist($Festival8);

        $Festival9 = new Festivals();
        $Festival9->setNom("MOTS-ZIC SOUS LES PINS");
        $Festival9->setGenreMusical("MUSIQUE ACTUELLE");
        $Festival9->setResume("Créer un festival de musiques actuelles en pleine campagne");
        $Festival9->setVilles($Ville2);
        $Festival9->addArtiste($Artiste3);
        $em->persist($Festival9);

        $Festival10 = new Festivals();
        $Festival10->setNom("FESTIVAL DU CHANT DE LEUCALYPTUS");
        $Festival10->setGenreMusical("SKA");
        $Festival10->setResume("Une programmation qui va faire des heureux cette année !");
        $Festival10->setVilles($Ville2);
        $Festival10->addArtiste($Artiste2);
        $em->persist($Festival10);

        $Festival11 = new Festivals();
        $Festival11->setNom("ROCK'N SOLEX");
        $Festival11->setGenreMusical("ROCK");
        $Festival11->setResume("KERRI CHANDLER / LOUISAHHH!!! / SWEELY / AZF / YANN POLEWKA / UN*DEUX / GIORGIA ANGIULI / CLEFT");
        $Festival11->setVilles($Ville5);
        $Festival11->addArtiste($Artiste6);
        $em->persist($Festival11);

        $em->Flush();



        return $this->render('insert_data/index.html.twig', [
            'controller_name' => 'InsertDataController',
        ]);
    }
}
