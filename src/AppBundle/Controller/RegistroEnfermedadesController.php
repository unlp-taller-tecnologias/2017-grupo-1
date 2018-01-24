<?php

namespace AppBundle\Controller;

use AppBundle\Entity\RegistroEnfermedades;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Visitante;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * Enfermedad controller.
 *
 * @Route("regenfermedades")
 */
class RegistroEnfermedadesController extends Controller {

    /**
     * Creates a new enfermedad entity.
     *
     * @Route("/{id}/new", name="regenfermedad_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request, Visitante $visitante) {
        $regenfermedades = new RegistroEnfermedades();
        $regenfermedades->setPropietario($visitante);
        $form = $this->createForm('AppBundle\Form\RegistroEnfermedadesType', $regenfermedades);
        $form->handleRequest($request);
        $em = $this->getDoctrine()->getManager();
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($regenfermedades);
            try {
                $em->flush();
                //$this->get('session')->getFlashBag()->add('success', 'El registro de enfermedad se agregó al sistema correctamente.');
                return new JsonResponse(array('success' => 1, 'message' => 'El registro de enfermedad se agregó al sistema correctamente.'));
            } catch (\Exception $e) {
                $this->get('session')->getFlashBag()->add('error', 'No se ha podido agregar el registro en el sistema. Detalle: ' . $e->getMessage());
            }
        }
        if ($form->isSubmitted() && !$form->isValid()) {
            return new JsonResponse(array('success' => 0, 'message' => 'No se pudo guardar el registro de enfermedades. Verifique que los campos ingresados sean correctos.'));
        }
        return $this->render('registroenfermedades/new.html.twig', array(
                    'entity' => $regenfermedades,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Listado de enfermedades de un visitante del sistema
     *
     * @Route("/{id}/listado", name="regenfermedades_de")
     * @Method("GET")
     */
    public function getEnfermedadesForAction(Request $request, Visitante $visitante) {
        return $this->render('registroenfermedades/listado.ajax.html.twig', array(
                    'regenfermedades' => $visitante->getRegistroEnfermedades(),
        ));
    }

    /**
     * Mostrar un registro de enfermedad de un visitante
     *
     * @Route("/{id}/show", name="regenfermedades_show")
     * @Method("GET")
     */
    public function showAction(Request $request, RegistroEnfermedades $regenfermedad) {
        return $this->render('registroenfermedades/show.html.twig', array(
                    'regenfermedad' => $regenfermedad,
                    'entity' => $regenfermedad,
        ));
    }

}
