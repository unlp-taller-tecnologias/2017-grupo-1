<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class NoDocenteType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('departamento')->add('oficina')->add('telefono')->add('funcion')->add('nombre')->add('apellido')->add('email')->add('pais')->add('provincia')->add('partido')->add('localidad')->add('codigoPostal')->add('tipoDocumento')->add('nroDocumento')->add('fechaNacimiento',DateType::class, array(
          'required'=>true,
          'widget'=>'single_text'
        ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\NoDocente'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_nodocente';
    }


}
