<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Component\Mime\Email;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'contact', methods: ['GET', 'POST'])]
    public function index(
        Request $request,
        MailerInterface $mailer
    ): Response
    {
        $form = $this->createForm(ContactType::class);
        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $value = $form->getData();

            $email = (new Email())
            ->from($value['E-mail'])
            ->to($value['Admin'])
            ->priority(Email::PRIORITY_HIGH)
            ->subject($value['objet'])
            ->text($value['message'])
            ->html('<p>See Twig integration for better HTML integration!</p>');

        $mailer->send($email);

        $this->addFlash('success', 'Votre message a bien été envoyé');
        $this->addFlash('error', 'Votre message n\'a pas pu être envoyé');
        }

        return $this->render('contact/index.html.twig', [
            'controller_name' => 'ContactController',
            'form' => $form->createView()
        ]);
    }
}
