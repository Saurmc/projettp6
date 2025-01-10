<?php

namespace App\Form;

use App\Entity\Dev;
use App\Entity\Competence;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Range;

class DevRegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class, [
                'label' => 'Email',
                'attr' => ['placeholder' => 'exemple@email.com']
            ])
            ->add('nom', TextType::class, [
                'label' => 'Nom',
                'attr' => ['placeholder' => 'Votre nom']
            ])
            ->add('prenom', TextType::class, [
                'label' => 'Prénom',
                'attr' => ['placeholder' => 'Votre prénom']
            ])
            ->add('localisation', TextType::class, [
                'label' => 'Localisation',
                'attr' => ['placeholder' => 'Ville, Pays']
            ])
            ->add('langages', ChoiceType::class, [
                'label' => 'Langages de programmation',
                'choices' => [
                    'PHP' => 'PHP',
                    'JavaScript' => 'JavaScript',
                    'Python' => 'Python',
                    'Java' => 'Java',
                    'C#' => 'C#',
                    'Ruby' => 'Ruby',
                    'C++' => 'C++',
                    'Swift' => 'Swift',
                    'Go' => 'Go'
                ],
                'multiple' => true,
                'expanded' => true
            ])
            ->add('niveauExperience', ChoiceType::class, [
                'label' => 'Niveau d\'expérience',
                'choices' => [
                    'Débutant (0-2 ans)' => 1,
                    'Intermédiaire (2-5 ans)' => 2,
                    'Avancé (5-8 ans)' => 3,
                    'Expert (8+ ans)' => 4
                ]
            ])
            ->add('salaireMinimum', NumberType::class, [
                'label' => 'Salaire minimum souhaité (€/an)',
                'attr' => ['placeholder' => '35000'],
                'constraints' => [
                    new Range([
                        'min' => 20000,
                        'max' => 150000,
                        'notInRangeMessage' => 'Le salaire doit être compris entre {{ min }}€ et {{ max }}€'
                    ])
                ]
            ])
            ->add('biographie', TextareaType::class, [
                'label' => 'Biographie',
                'attr' => [
                    'placeholder' => 'Parlez-nous de vous, de votre parcours et de vos aspirations...',
                    'rows' => 5
                ]
            ])
            ->add('avatar', UrlType::class, [
                'label' => 'URL de votre avatar',
                'required' => false,
                'attr' => ['placeholder' => 'https://exemple.com/votre-avatar.jpg']
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
                'label' => 'Compétences'
            ])
            ->add('plainPassword', PasswordType::class, [
                'mapped' => false,
                'label' => 'Mot de passe',
                'attr' => ['placeholder' => 'Choisissez un mot de passe sécurisé'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer un mot de passe',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Votre mot de passe doit contenir au moins {{ limit }} caractères',
                        'max' => 4096,
                    ]),
                ],
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
