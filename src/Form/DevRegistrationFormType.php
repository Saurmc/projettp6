<?php

namespace App\Form;

use App\Entity\Dev;
use App\Entity\Competence;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Range;
use Symfony\Component\Validator\Constraints\Callback;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

class DevRegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class, [
                'label' => 'Email',
                'attr' => ['placeholder' => 'exemple@email.com'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Ce champ est requis'
                    ]),
                    new Email([
                        'message' => 'Email invalide'
                    ])
                ]
            ])
            ->add('nom', TextType::class, [
                'label' => 'Nom',
                'attr' => ['placeholder' => 'Votre nom'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Ce champ est requis'
                    ]),
                    new Length([
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
                    new NotBlank([
                        'message' => 'Ce champ est requis'
                    ]),
                    new Length([
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
                    new NotBlank([
                        'message' => 'Ce champ est requis'
                    ]),
                    new Length([
                        'max' => 100,
                        'maxMessage' => 'Maximum {{ limit }} caractères'
                    ])
                ]
            ])
            ->add('competences', EntityType::class, [
                'class' => Competence::class,
                'choice_label' => 'nom',
                'multiple' => true,
                'expanded' => false,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('c')
                        ->orderBy('c.categorie', 'ASC')
                        ->addOrderBy('c.nom', 'ASC');
                },
                'group_by' => function($choice, $key, $value) {
                    return $choice->getCategorie();
                },
                'attr' => [
                    'class' => 'select2',
                    'data-placeholder' => 'Sélectionnez vos compétences'
                ],
                'label' => 'Compétences',
                'constraints' => [
                    new NotBlank([
                        'message' => 'Sélectionnez au moins une compétence'
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
                'attr' => ['class' => 'form-select'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Ce champ est requis'
                    ])
                ]
            ])
            ->add('salaireMinimum', NumberType::class, [
                'label' => 'Salaire minimum annuel (€)',
                'attr' => [
                    'placeholder' => 'Ex: 35000',
                    'min' => '15000',
                    'step' => '1000'
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Ce champ est requis'
                    ]),
                    new Range([
                        'min' => 15000,
                        'max' => 300000,
                        'notInRangeMessage' => 'Doit être entre {{ min }}€ et {{ max }}€'
                    ])
                ]
            ])
            ->add('biographie', TextareaType::class, [
                'label' => 'Biographie',
                'attr' => [
                    'placeholder' => 'Décrivez brièvement votre parcours et vos expériences (minimum 10 caractères)',
                    'rows' => 5
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Ce champ est requis'
                    ]),
                    new Length([
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
                    new Length([
                        'max' => 255,
                        'maxMessage' => 'Maximum {{ limit }} caractères'
                    ])
                ]
            ])
            ->add('plainPassword', PasswordType::class, [
                'mapped' => false,
                'label' => 'Mot de passe',
                'attr' => ['placeholder' => 'Choisissez un mot de passe sécurisé'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Ce champ est requis',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Minimum {{ limit }} caractères',
                        'max' => 4096,
                    ]),
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
