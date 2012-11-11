<?php

namespace Lezgro\Mobd2Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UsersType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('login')
            ->add('name')
            ->add('email')
            ->add('fbid')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Lezgro\Mobd2Bundle\Entity\Users'
        ));
    }

    public function getName()
    {
        return 'lezgro_mobd2bundle_userstype';
    }
}
