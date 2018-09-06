<?php
// src/Form/Type/GenderType.php
namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class GenderType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'choices' => array(
                'Herr' => 'Herr',
                'Frau' => 'Frau',
            ),
        ));
    }

    public function getParent()
    {
        return ChoiceType::class;
    }
}