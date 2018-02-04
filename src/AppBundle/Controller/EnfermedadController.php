<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Enfermedad;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use AppBundle\Entity\Visitante;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * Enfermedad controller.
 *
 * @Route("enfermedad")
 */
class EnfermedadController extends Controller {

    /**
     * Lists all enfermedad entities.
     *
     * @Route("/", name="enfermedad_index")
     * @Method("GET")
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();
        $enfermedades = $em->getRepository('AppBundle:Enfermedad')->findAllOrderedByNombre();
        return $this->render('enfermedad/index.html.twig', array(
                    'enfermedades' => $enfermedades,
        ));
    }

    /**
     * Creates a new enfermedad entity.
     *
     * @Route("/new", name="enfermedad_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request) {
        $enfermedad = new Enfermedad();
        $form = $this->createForm('AppBundle\Form\EnfermedadType', $enfermedad);
        $form->handleRequest($request);
        $em = $this->getDoctrine()->getManager();
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($enfermedad);
            try {
                $em->flush();
                $this->get('session')->getFlashBag()->add('success', 'La enfermedad se agregó al sistema correctamente.');
                return $this->redirectToRoute("enfermedad_index");
            } catch (\Exception $e) {
                $this->get('session')->getFlashBag()->add('error', 'No se ha podido agregar la enfermedad en el sistema. Detalle: ' . $e->getMessage());
            }
        }
        if ($form->isSubmitted() && !$form->isValid()) {
            $validator = $this->get('validator');
            $errors = $validator->validate($enfermedad);
            foreach ($errors as $error) {
                $this->get('session')->getFlashBag()->add('error', $error->getMessage());
            }
        }
        return $this->render('enfermedad/new.html.twig', array(
                    'enfermedad' => $enfermedad,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing enfermedad entity.
     *
     * @Route("/{id}/edit", name="enfermedad_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Enfermedad $enfermedad) {
        $form = $this->createForm('AppBundle\Form\EnfermedadType', $enfermedad);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($enfermedad);
            try {
                $em->flush();
                $this->get('session')->getFlashBag()->add('success', 'La enfermedad se editó correctamente.');
                return $this->redirectToRoute("enfermedad_index");
            } catch (\Exception $e) {
                $this->get('session')->getFlashBag()->add('error', 'No se ha podido editar la enfermedad. Detalle: ' . $e->getMessage());
            }
        }
        if ($form->isSubmitted() && !$form->isValid()) {
            $validator = $this->get('validator');
            $errors = $validator->validate($enfermedad);
            foreach ($errors as $error) {
                $this->get('session')->getFlashBag()->add('error', $error->getMessage());
            }
        }

        return $this->render('enfermedad/edit.html.twig', array(
                    'enfermedad' => $enfermedad,
                    'form' => $form->createView()
        ));
    }

    /**
     * Deletes a enfermedad entity.
     *
     * @Route("/{id}/delete", name="enfermedad_delete")
     * @Method("POST")
     */
    public function deleteAction(Request $request, Enfermedad $enfermedad) {
        $em = $this->getDoctrine()->getManager();
        try {
            $enfermedad->setBorrado(TRUE);
            $em->flush();
            return new JsonResponse(array('success' => true, 'message' => 'La enfermedad fue eliminado con éxito'));
        } catch (\Exception $e) {
            return new JsonResponse(array('success' => false, 'message' => 'Error al intentar eliminar la enfermedad del sistema'));
        }
    }

    /**
     * Alta de inscripto entity.
     *
     * @Route("/{id}/altaEnfermedad", name="enfermedad_alta")
     * @Method("POST")
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function altaAction(Request $request, Enfermedad $enfermedad) {
        $em = $this->getDoctrine()->getManager();
        try {
            $enfermedad->setBorrado(FALSE);
            $em->flush();
            return new JsonResponse(array('success' => true, 'message' => 'La enfermedad se dio de alta con éxito'));
        } catch (\Exception $e) {
            return new JsonResponse(array('success' => false, 'message' => 'Error al intentar eliminar la vacuna del sistema'));
        }
    }

}
