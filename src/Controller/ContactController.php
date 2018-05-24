<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactRepository;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContactController extends Controller
{
    /**
     * @Route("/contact/{id}/create", name="contact_create")
     */
    public function createContact($id, Request $request)
    {
        return $this->render('contact/contact.html.twig', [
            'controller_name' => 'ContactController',
        ]);
    }
}
