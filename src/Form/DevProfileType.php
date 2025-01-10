<?php

namespace App\Form;

use App\Entity\Dev;
use App\Entity\Competence;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Validator\Constraints as Assert;

class DevProfileType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Nom',
                'attr' => ['placeholder' => 'Votre nom'],
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Ce champ est requis'
                    ]),
                    new Assert\Length([
                        'min' => 2,
                        'max' => 50,
                        'minMessage' => 'Minimum {{ limit }} caractères',
                        'maxMessage' => 'Maximum {{ limit }} caractères'
                    ])
                ]
            ])
            ->add('prenom', TextType::class, [
                'label' => 'Prénom',
                'attr' => ['placeholder' => 'Votre prénom'],
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Ce champ est requis'
                    ]),
                    new Assert\Length([
                        'min' => 2,
                        'max' => 50,
                        'minMessage' => 'Minimum {{ limit }} caractères',
                        'maxMessage' => 'Maximum {{ limit }} caractères'
                    ])
                ]
            ])
            ->add('localisation', TextType::class, [
                'label' => 'Localisation',
                'attr' => ['placeholder' => 'Ville, Pays'],
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Ce champ est requis'
                    ])
                ]
            ])
            ->add('niveauExperience', ChoiceType::class, [
                'label' => 'Niveau d\'expérience',
                'choices' => [
                    'Junior (0-2 ans)' => 1,
                    'Intermédiaire (2-5 ans)' => 2,
                    'Senior (5+ ans)' => 3
                ],
                'attr' => ['class' => 'form-select']
            ])
            ->add('salaireMinimum', NumberType::class, [
                'label' => 'Salaire minimum annuel (€)',
                'attr' => [
                    'placeholder' => 'Ex: 35000',
                    'min' => '15000',
                    'step' => '1000'
                ],
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Ce champ est requis'
                    ]),
                    new Assert\Range([
                        'min' => 15000,
                        'max' => 300000,
                        'notInRangeMessage' => 'Doit être entre {{ min }}€ et {{ max }}€'
                    ])
                ]
            ])
            ->add('competences', EntityType::class, [
                'class' => Competence::class,
                'choice_label' => 'nom',
                'multiple' => true,
                'expanded' => true,
                'required' => false,
                'by_reference' => false,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('c')
                        ->orderBy('c.nom', 'ASC');
                },
                'label' => 'Compétences',
                'label_attr' => ['class' => 'form-label'],
                'attr' => ['class' => 'competences-list']
            ])
            ->add('biographie', TextareaType::class, [
                'label' => 'Biographie',
                'attr' => [
                    'placeholder' => 'Décrivez brièvement votre parcours et vos expériences (minimum 10 caractères)',
                    'rows' => 5
                ],
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Ce champ est requis'
                    ]),
                    new Assert\Length([
                        'min' => 10,
                        'max' => 1000,
                        'minMessage' => 'Minimum {{ limit }} caractères',
                        'maxMessage' => 'Maximum {{ limit }} caractères'
                    ])
                ]
            ])
            ->add('avatar', TextType::class, [
                'label' => 'URL de votre avatar',
                'required' => false,
                'attr' => ['placeholder' => 'https://exemple.com/votre-avatar.jpg'],
                'constraints' => [
                    new Assert\Length([
                        'max' => 255,
                        'maxMessage' => 'Maximum {{ limit }} caractères'
                    ])
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Dev::class,
        ]);
    }
}
