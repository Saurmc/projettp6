<?php

namespace App\Form;

use App\Entity\FicheDePoste;
use App\Entity\Competence;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Doctrine\ORM\EntityRepository;

class FicheDePosteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre', TextType::class, [
                'label' => 'Titre du poste',
                'attr' => [
                    'placeholder' => 'Ex: Développeur Full Stack PHP/Symfony'
                ]
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description du poste',
                'attr' => [
                    'rows' => 5,
                    'placeholder' => 'Décrivez le poste, les responsabilités et les compétences requises'
                ]
            ])
            ->add('localisation', TextType::class, [
                'label' => 'Localisation',
                'attr' => [
                    'placeholder' => 'Ex: Paris, France'
                ]
            ])
            ->add('salaire', MoneyType::class, [
                'label' => 'Salaire annuel',
                'currency' => 'EUR',
                'attr' => [
                    'placeholder' => 'Ex: 45000'
                ]
            ])
            ->add('niveauExperience', IntegerType::class, [
                'label' => 'Années d\'expérience requises',
                'attr' => [
                    'min' => 0,
                    'max' => 20,
                    'placeholder' => 'Ex: 3'
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
                    'data-placeholder' => 'Sélectionnez les compétences requises'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => FicheDePoste::class,
        ]);
    }
}