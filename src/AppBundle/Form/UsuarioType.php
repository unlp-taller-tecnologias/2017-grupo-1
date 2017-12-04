<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Description of UsuarioType
 *
 * @author kibunke
 */
class UsuarioType extends AbstractType {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('username')
                ->add('password')
                ->add('roles')
                ->add('rol', EntityType::class, array(
                    'class' => 'AppBundle:Rol',
                    //'label' => 'Roles del Sistema',
                    //'placeholder' => 'Seleccione un Rol...',
                    'multiple' => false,
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Usuario'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix() {
        return 'appbundle_enfermedad';
    }

}
