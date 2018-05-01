<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class InscriptoType extends AbstractType {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('nroFicha', TextType::class, array(
                    'required' => false,
                ))
                ->add('legajo', TextType::class, array(
                    'required' => false,
                ))
                ->add('fechaInscripcion', DateType::class, array(
                    'widget' => 'single_text'
                ))
                ->add('nombre', TextType::class)
                ->add('apellido', TextType::class)
                ->add('email', TextType::class)
                ->add('pais', TextType::class)
                ->add('provincia', TextType::class)
                ->add('partido', TextType::class)
                ->add('localidad', TextType::class)
                ->add('codigoPostal', TextType::class)
                ->add('tipoDocumento', EntityType::class, array(
                    'class' => 'AppBundle:TipoDocumento',
                    'multiple' => false,
                ))
                ->add('nroDocumento', TextType::class)
                ->add('fechaNacimiento', DateType::class, array(
                    'required' => true,
                    'widget' => 'single_text'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Inscripto'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix() {
        return 'appbundle_inscripto';
    }

}
