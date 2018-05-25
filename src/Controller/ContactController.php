<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContactController extends Controller
{
    /**
     * @Route("/Contact/create", name="contact_create")
     */
    public function createContact(Request $request)
    {
        //crée une instance de de Nom vide
        $contact=new Contact();

        //créé le formulaire et lui associe notre instance vide
        $form = $this->createForm(ContactType::class, $contact);

        //prend les données du formulaire et les injecte dans le contact vide
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            //sauvegarde du commentaire
            $em = $this->getDoctrine()->getManager();
            $em->persist($contact);
            $em->flush();

            //ce message est censée s'afficher sur la page en validation du commentaire
            $this->addFlash("success", "Ton commentaire est enregistré");
        }

        return $this->render("contact/contact.html.twig", [
            "form" =>$form->createView(),

        ]);
    }
}
