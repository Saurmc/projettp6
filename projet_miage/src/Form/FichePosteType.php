<?php

namespace App\Form;

use App\Entity\FichePoste;
use App\Enum\ExperienceEnum;
use App\Enum\LangagesEnum;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EnumType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FichePosteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre_poste', TextType::class, [
                'label' => 'Titre du poste',
                'required' => true,
                'attr' => [
                    'placeholder' => 'Ex: Développeur Full Stack PHP/Symfony'
                ]
            ])
            ->add('localisation', TextType::class, [
                'label' => 'Localisation',
                'required' => true,
                'attr' => [
                    'placeholder' => 'Ex: Paris, France'
                ]
            ])
            ->add('technologie', EnumType::class, [
                'class' => LangagesEnum::class,
                'label' => 'Technologie principale requise',
                'required' => true
            ])
            ->add('experience', EnumType::class, [
                'class' => ExperienceEnum::class,
                'label' => 'Niveau d\'expérience requis',
                'required' => true
            ])
            ->add('salaire', MoneyType::class, [
                'label' => 'Salaire annuel (€)',
                'required' => true,
                'currency' => 'EUR',
                'attr' => [
                    'placeholder' => 'Ex: 45000'
                ]
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description du poste',
                'required' => true,
                'attr' => [
                    'rows' => 10,
                    'placeholder' => 'Décrivez le poste, les responsabilités, les compétences requises, les avantages...'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => FichePoste::class,
        ]);
    }
}
