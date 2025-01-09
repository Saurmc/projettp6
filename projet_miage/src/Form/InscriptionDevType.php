<?php

namespace App\Form;

use App\Entity\Developpeur;
use App\Entity\User;
use App\Enum\ExperienceEnum;
use App\Enum\LangagesEnum;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\EnumType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class InscriptionDevType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('user', UserType::class, [
                'data_class' => User::class,
                'label' => false
            ])
            ->add('developpeur', DeveloppeurType::class, [
                'data_class' => Developpeur::class,
                'label' => false
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => null,
        ]);
    }
}

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class, [
                'label' => 'Email',
                'required' => true
            ])
            ->add('password', PasswordType::class, [
                'label' => 'Mot de passe',
                'required' => true
            ])
        ;
    }
}

class DeveloppeurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Nom',
                'required' => true
            ])
            ->add('prenom', TextType::class, [
                'label' => 'Prénom',
                'required' => true
            ])
            ->add('localisation', TextType::class, [
                'label' => 'Localisation',
                'required' => true
            ])
            ->add('langage', EnumType::class, [
                'class' => LangagesEnum::class,
                'label' => 'Langage principal',
                'required' => true
            ])
            ->add('experience', EnumType::class, [
                'class' => ExperienceEnum::class,
                'label' => 'Niveau d\'expérience',
                'required' => true
            ])
            ->add('salaire', MoneyType::class, [
                'label' => 'Salaire souhaité',
                'required' => true,
                'currency' => 'EUR'
            ])
            ->add('biographie', TextareaType::class, [
                'label' => 'Biographie',
                'required' => false
            ])
            ->add('avatarFile', FileType::class, [
                'label' => 'Photo de profil',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '1024k',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                        ],
                        'mimeTypesMessage' => 'Veuillez uploader une image valide (JPG ou PNG)',
                    ])
                ],
            ])
        ;
    }
}
