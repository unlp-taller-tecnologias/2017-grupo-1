<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Description of RegistroEnfermedadesType
 *
 * @author kibunke
 */
class RegistroEnfermedadesType extends AbstractType {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('fechaInicio', DateType::class, array(
                    'widget' => 'single_text',
                ))
                ->add('fechaFin', DateType::class, array(
                    'widget' => 'single_text',
                ))
                ->add('observacion', TextareaType::class)
                ->add('enfermedad', EntityType::class, array(
                    'class' => 'AppBundle:Enfermedad',
                    'multiple' => false,
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\RegistroEnfermedades'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix() {
        return 'appbundle_registroenfermedades';
    }

}
