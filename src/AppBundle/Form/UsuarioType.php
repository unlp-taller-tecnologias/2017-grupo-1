<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
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
        $builder->add('username', TextType::class)
                ->add('isActive', CheckboxType::class, array(
                    'required' => false,
                ))
               /* ->add('resetPassword', CheckboxType::class, array(
                    'mapped' => false
                ))*/
                ->add('password', PasswordType::class)
                ->add('passwordConfirm', PasswordType::class, array(
                    'mapped' => false,
                    'required' => true,
                ))
                ->add('rol', EntityType::class, array(
                    'class' => 'AppBundle:Rol',
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
        return 'appbundle_usuario';
    }

}
