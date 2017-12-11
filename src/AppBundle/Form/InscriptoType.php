<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InscriptoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nroFicha')
        ->add('legajo')
        ->add('fechaInscripcion')
        ->add('nombre')
        ->add('apellido')
        ->add('email')
        ->add('pais')
        ->add('provincia')
        ->add('partido')
        ->add('localidad')
        ->add('codigoPostal')
        ->add('tipoDocumento')
        ->add('nroDocumento');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Inscripto'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_inscripto';
    }


}
