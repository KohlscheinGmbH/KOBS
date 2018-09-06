<?php
// src/Form/UserType.php
namespace App\Form;

use App\Entity\Menu;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', TextType::class)
            ->add('password', PasswordType::class)
			->add('vorname', TextType::class)
			->add('nachname', TextType::class)
			->add('email', EmailType::class)
			->add('anrede', ChoiceType::class, array(
				'choices' => array(
					'Herr' => 'Herr',
					'Frau' => 'Frau',
					),				
				))
			->add('abteilung', ChoiceType::class, array(
				'choices' => array(
					'IT' => 'IT',
					'Buchhaltung' => 'Buchhaltung',
					'Einkauf'   => 'Einkauf',
					'Pappenhandel' => 'Pappenhandel',
					),				
				));
			;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Menu::class,
        ));
    }
}