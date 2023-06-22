<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder



            ->add('firstName', TextType::class, [
                'label' => 'Prénom',
                'attr' => [
                    'placeholder' => 'Votre prénom',
                    'class' => 'form-control mb-4'
                ],
                'required' => 'true',
                'constraints' => [
                    new NotBlank([
                        'message' => 'Auriez-vous oublié votre prénom ?'
                    ]),
                    new Length([
                        'min' => 2,
                        'minMessage' => 'Ecrivez un minimum de {{ limit }} caractères',
                        'max' => 30,
                        'minMessage' => 'Vous avez dépassé la limite de {{ limit }} caractères'
                    ]),
                    new Regex([
                        'pattern' => '/^[a-zA-Z]+$/',
                        'message' => 'Vous avez écrit des carctères non valides'
                    ])
                ]
            ])


            ->add('lastName', TextType::class, [
                'label' => 'Nom',
                'attr' => [
                    'placeholder' => 'Votre nom',
                    'class' => 'form-control mb-4'
                ],
                'required' => 'true',
                'constraints' => [
                    new NotBlank([
                        'message' => 'Auriez-vous oublié votre nom ?'
                    ]),
                    new Length([
                        'min' => 2,
                        'minMessage' => 'Ecrivez un minimum de {{ limit }} caractères',
                        'max' => 30,
                        'minMessage' => 'Vous avez dépassé la limite de {{ limit }} caractères'
                    ]),
                    new Regex([
                        'pattern' => '/^[a-zA-Z]+$/',
                        'message' => 'Vous avez écrit des carctères non valides'
                    ])
                ]
            ])


            ->add('E-mail', EmailType::class, [
                'label' => 'E-mail',
                'attr' => [
                    'placeholder' => 'Votre mail',
                    'class' => 'form-control mb-4'
                ],
                'required' => 'true',
                'constraints' => [
                    new NotBlank([
                        'message' => 'Auriez-vous oublié votre nom ?'
                    ]),
                    new Regex([
                        'pattern' => "/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/",
                        'message' => 'Vous avez écrit des caractères non valides'
                    ])
                ]
            ])


            ->add('telephone', TelType::class, [
                'label' => 'Numéro de téléphone',
                'attr' => [
                    'placeholder' => 'Votre numéro de téléphone',
                    'class' => 'form-control mb-4'
                ],
            ])


            ->add('objet', TextType::class, [
                'label' => 'Objet de votre message',
                'attr' => [
                    'placeholder' => 'Ecrivez l\'objet de votre message',
                    'class' => 'form-control mb-4'
                ],
                'required' => 'true'
            ])


            ->add('message', TextareaType::class, [
                'label' => 'Message',
                'attr' => [
                    'placeholder' => 'Ecrivez votre message ici',
                    'class' => 'form-control mb-4',
                    'rows' => 4
                ],
                'required' => 'true'
            ])


            ->add('submit', SubmitType::class, [
                'label' => 'Envoyer',
                'attr' => ['class' => 'btn btn-primary btn-block mb-4']
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
