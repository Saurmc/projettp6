<?php

// src/Form/SearchFilterType.php

namespace App\Form;

use App\Entity\Developer;
use App\Entity\Job;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FilterLangageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // Choisir entre rechercher des développeurs ou des offres de poste
        $builder
            ->add('type', ChoiceType::class, [
                'choices' => [
                    'Développeurs' => 'developer',
                    'Postes' => 'job',
                ],
                'required' => true,
                'placeholder' => 'Sélectionnez le type de recherche',
            ])
            // Langages ou technologies (en fonction du type de recherche)
            ->add('technology', TextType::class, [
                'label' => 'Technologies/langages',
                'required' => false,
            ])
            // Localisation
            ->add('location', TextType::class, [
                'label' => 'Localisation',
                'required' => false,
            ])
            // Salaire souhaité ou proposé
            ->add('salary', NumberType::class, [
                'label' => 'Salaire (minimum ou proposé)',
                'required' => false,
            ])
            // Niveau d'expérience
            ->add('experienceLevel', ChoiceType::class, [
                'choices' => [
                    'Débutant' => 1,
                    'Intermédiaire' => 2,
                    'Expérimenté' => 3,
                    'Expert' => 4,
                ],
                'required' => false,
                'placeholder' => 'Sélectionnez un niveau d\'expérience',
            ])
            // Soumettre le formulaire
            ->add('submit', SubmitType::class, [
                'label' => 'Rechercher',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => null, // Pas de classe d'entité spécifique, il s'agit d'un formulaire générique.
        ]);
    }
}
