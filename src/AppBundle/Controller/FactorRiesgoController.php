<?php

namespace AppBundle\Controller;

use AppBundle\Entity\FactorRiesgo;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * Factorriesgo controller.
 *
 * @Route("factorriesgo")
 */
class FactorRiesgoController extends Controller {

    /**
     * Lists all factorRiesgo entities.
     *
     * @Route("/", name="factorriesgo_index")
     * @Method("GET")
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();
        $factorRiesgos = $em->getRepository('AppBundle:FactorRiesgo')->findAllOrderedByNombre();
        return $this->render('factorriesgo/index.html.twig', array(
                    'factorRiesgos' => $factorRiesgos,
        ));
    }

    /**
     * Creates a new factorRiesgo entity.
     *
     * @Route("/new", name="factorriesgo_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request) {
        $factorRiesgo = new Factorriesgo();
        $form = $this->createForm('AppBundle\Form\FactorRiesgoType', $factorRiesgo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($factorRiesgo);
            try {
                $em->flush();
                $this->get('session')->getFlashBag()->add('success', 'El factor de riesgo se editó correctamente.');
                return $this->redirectToRoute("factorriesgo_index");
            } catch (\Exception $e) {
                $this->get('session')->getFlashBag()->add('error', 'No se ha podido editar el factor de riesgo. Detalle: ' . $e->getMessage());
            }
        }
        if ($form->isSubmitted() && !$form->isValid()) {
            $validator = $this->get('validator');
            $errors = $validator->validate($factorRiesgo);
            foreach ($errors as $error) {
                $this->get('session')->getFlashBag()->add('error', $error->getMessage());
            }
        }
        return $this->render('factorriesgo/new.html.twig', array(
                    'factorRiesgo' => $factorRiesgo,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing factorRiesgo entity.
     *
     * @Route("/{id}/edit", name="factorriesgo_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, FactorRiesgo $factorRiesgo) {
        $form = $this->createForm('AppBundle\Form\FactorRiesgoType', $factorRiesgo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($factorRiesgo);
            try {
                $em->flush();
                $this->get('session')->getFlashBag()->add('success', 'El factor de riesgo se editó correctamente.');
                return $this->redirectToRoute("factorriesgo_index");
            } catch (\Exception $e) {
                $this->get('session')->getFlashBag()->add('error', 'No se ha podido editar el factor de riesgo. Detalle: ' . $e->getMessage());
            }
        }
        if ($form->isSubmitted() && !$form->isValid()) {
            $validator = $this->get('validator');
            $errors = $validator->validate($factorRiesgo);
            foreach ($errors as $error) {
                $this->get('session')->getFlashBag()->add('error', $error->getMessage());
            }
        }
        return $this->render('factorriesgo/edit.html.twig', array(
                    'form' => $form->createView(),
                    'entity' => $factorRiesgo
        ));
    }

    /**
     * Deletes a factorRiesgo entity.
     *
     * @Route("/{id}/delete", name="factorriesgo_delete")
     * @Method("POST")
     */
    public function deleteAction(Request $request, FactorRiesgo $factorRiesgo) {
        $em = $this->getDoctrine()->getManager();
        try {
            $factorRiesgo->setBorrado(TRUE);
            $em->flush();
            return new JsonResponse(array('success' => true, 'message' => 'El factor de riesgo fue eliminado con éxito'));
        } catch (\Exception $e) {
            return new JsonResponse(array('success' => false, 'message' => 'Error al intentar eliminar el factor de riesgo del sistema'));
        }
    }

    /**
     * Alta de vacuna entity.
     *
     * @Route("/{id}/altaFactorriesgo", name="factorriesgo_alta")
     * @Method("POST")
     */
    public function altaAction(Request $request, FactorRiesgo $factorRiesgo) {
        $em = $this->getDoctrine()->getManager();
        try {
            $factorRiesgo->setBorrado(FALSE);
            $em->flush();
            return new JsonResponse(array('success' => true, 'message' => 'El factor de riesgo se dio de alta con éxito'));
        } catch (\Exception $e) {
            return new JsonResponse(array('success' => false, 'message' => 'Error al intentar eliminar la vacuna del sistema'));
        }
    }

}
