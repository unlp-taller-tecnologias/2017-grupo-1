<?php

namespace AppBundle\Controller;

use AppBundle\Entity\RegistroFactorRiesgo;
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
 * @Route("regfactorriesgo")
 */
class RegistroFactorRiesgoController extends Controller {

    /**
     * Creates a new registro de factor de riesgo.
     *
     * @Route("/{id}/new", name="regfactorriesgo_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request, Visitante $visitante) {
        $regfactorriesgo = new RegistroFactorRiesgo();
        $regfactorriesgo->setPropietario($visitante);
        $form = $this->createForm('AppBundle\Form\RegistroFactorRiesgoType', $regfactorriesgo);
        $form->handleRequest($request);
        $em = $this->getDoctrine()->getManager();
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($regfactorriesgo);
            try {
                $em->flush();
                return new JsonResponse(array('success' => 1, 'message' => 'El registro de factor de riesgo se agregó al sistema correctamente.'));
            } catch (\Exception $e) {
                $this->get('session')->getFlashBag()->add('error', 'No se ha podido agregar el registro en el sistema. Detalle: ' . $e->getMessage());
            }
        }
        if ($form->isSubmitted() && !$form->isValid()) {
            return new JsonResponse(array('success' => 0, 'message' => 'No se pudo guardar el registro de factor de riesgo. Verifique que los campos ingresados sean correctos.'));
        }
        return $this->render('registrofactorriesgo/new.html.twig', array(
                    'entity' => $regfactorriesgo,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Listado de enfermedades de un visitante del sistema
     *
     * @Route("/{id}/listado", name="regfactorriesgo_de")
     * @Method("GET")
     */
    public function getEnfermedadesForAction(Request $request, Visitante $visitante) {
        return $this->render('registrofactorriesgo/listado.ajax.html.twig', array(
                    'regfactorriesgo' => $visitante->getRegistroFactoresRiesgo(),
        ));
    }

    /**
     * Mostrar un registro de factor de riesgo de un visitante
     *
     * @Route("/{id}/show", name="regfactorriesgo_show")
     * @Method("GET")
     */
    public function showAction(Request $request, RegistroFactorRiesgo $regenfermedad) {
        return $this->render('registroenfermedades/show.html.twig', array(
                    'regenfermedad' => $regenfermedad,
                    'entity' => $regenfermedad,
        ));
    }

    /**
     * Eliminar un registro de factor de riesgo de un visitante
     *
     * @Route("/{id}/delete", name="regfactorriesgo_delete")
     * @Method("POST")
     */
    public function deleteAction(Request $request, RegistroFactorRiesgo $regfactorriesgo) {
        $em = $this->getDoctrine()->getManager();
        $em->remove($regfactorriesgo);
        try {
            $em->flush();
            return new JsonResponse(array('success' => 1, 'message' => 'El registro de factor de riesgo se agregó al sistema correctamente.'));
        } catch (\Exception $e) {
            return new JsonResponse(array('success' => 0, 'message' => 'No se pudo eliminar el registro de factor de riesgo.'));
        }
    }

}
