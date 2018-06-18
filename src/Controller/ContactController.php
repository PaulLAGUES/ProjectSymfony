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
    public function createContact(Request $request, \Swift_Mailer $mailer)
    {
        //crée une instance de de Nom vide
        $contact = new Contact();

        //créé le formulaire et lui associe notre instance vide
        $form = $this->createForm(ContactType::class, $contact);

        //prend les données du formulaire et les injecte dans le contact vide
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            //sauvegarde du commentaire
            //$em = $this->getDoctrine()->getManager();
            //$em->persist($contact);
            //$em->flush();

            //insertion de la mécanique de récupération des infos du Form pour remplir les champs du mail à envoyer
            $message = (new \Swift_Message('Vous avez un nouveau message utilisateur en provenance de GeoFest'))

                // on récupère l'email laissé par l'utilisateur à partir du $contact définit en début de fonction
                ->setFrom($contact -> getEmail())

                // l'adresse Email créée pour recevoir les comentaire des utilisateurs du projet
                ->setTo('bobbyprojectsymfony@gmail.com')

                //définition corps du mail
                ->setBody(
                    $this->renderView(
                    // templates/emails/registration.html.twig
                    //   'emails/registration.html.twig',
                    //array('Nom' => $name, 'Prenom' => $Prenom, 'Email' => $Email, 'Comment' => $Comment)
                    // templates/email/registration.html.twig
                        'email/registration.html.twig',
                        array('Nom' => $contact -> getNom(), 'Prenom' => $contact -> getPrenom(), 'Email'=> $contact -> getEmail(), 'Comment' => $contact -> getComment())
                    ),
                    'text/html'

                )/*
                 * Si on veut inclure une version plaintext au message
                ->addPart(
                    $this->renderView(
                        'email/registration.txt.twig',
                        array('Nom' => $name, 'Prenom' => $Prenom, 'Email' => $Email, 'Comment' => $Comment)
                    ),
                    'text/plain'
                )
                */
            ;

            $mailer->send($message);
            //ce message est censée s'afficher sur la page en validation du commentaire
            $this->addFlash("success", "Ton commentaire est envoyé");
            return $this -> redirectToRoute("contact_create");
        }

        return $this->render("contact/contact.html.twig", [
            "form" => $form->createView(),

        ]);
    }
}
