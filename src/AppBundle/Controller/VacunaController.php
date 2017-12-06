<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class VacunaController extends Controller
{
    /**
     * @Route("/vacuna", name="vacuna")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('vacuna/index.html.twig');
    }

	/**
     * @Route("/altaVacuna", name="altaVacuna")
     */
    public function altaVacuna(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('vacuna/alta.html.twig');
    }

    /**
     * @Route("/altaVacunaAction", name="altaVacunaAction")
     */
    public function altaVacunaAction(Request $request)
    {
        try {
            $vacuna = new Vacuna();
            $hospedaje->setNombre($request->get('nombre'));
            $hospedaje->setAbreviatura($request->get('abreviatura'));
            $hospedaje->setDescripcion($request->get('descripcion'));

            $em = $this->getDoctrine()->getManager();
            $em->persist($vacuna);
            $em->flush();

            $this->get('session')->getFlashBag()->add('success', 'La vacuna se dio de alta exitosamente.');
            return $this->redirect($this->generateUrl('vacuna'));
        } catch (ORMException $e) {
            $this->get('session')->getFlashBag()->add('error', 'Error inesperado, intente nuevamente.');
            return $this->redirect($this->generateUrl('vacuna'));
        }
    }

        
    }

        /**
     * @Route("/modificarVacuna", name="modificarVacuna")
     */
    public function modificarAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('vacuna/modificar.html.twig');
    }
}
