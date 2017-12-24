<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Vacuna;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Vacuna controller.
 *
 * @Route("vacuna")
 */
class VacunaController extends Controller
{
    /**
     * Lists all vacuna entities.
     *
     * @Route("/", name="vacuna_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $vacunas = $em->getRepository('AppBundle:Vacuna')->findAll();

        return $this->render('vacuna/index.html.twig', array(
            'vacunas' => $vacunas,
        ));
    }

    /**
     * Creates a new vacuna entity.
     *
     * @Route("/new", name="vacuna_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $vacuna = new Vacuna();
        $form = $this->createForm('AppBundle\Form\VacunaType', $vacuna);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($vacuna);
            $em->flush();
            try {
                $em->flush();
                $this->get('session')->getFlashBag()->add('success', 'La vacuna se agregó al sistema correctamente.');
                return $this->redirectToRoute("vacuna_index");
            } catch (\Exception $e) {
                $this->get('session')->getFlashBag()->add('error', 'No se ha podido agregar la vacuna en el sistema. Detalle: ' . $e->getMessage());
            }
        }
        if ($form->isSubmitted() && !$form->isValid()) {
            $validator = $this->get('validator');
            $errors = $validator->validate($vacuna);
            foreach ($errors as $error) {
                $this->get('session')->getFlashBag()->add('error', $error->getMessage());
            }
        }
        return $this->render('vacuna/new.html.twig', array(
            'vacuna' => $vacuna,
            'form' => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing vacuna entity.
     *
     * @Route("/{id}/edit", name="vacuna_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Vacuna $vacuna)
    {
        $editForm = $this->createForm('AppBundle\Form\VacunaType', $vacuna);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
          $em = $this->getDoctrine()->getManager();
          $em->persist($vacuna);
          $em->flush();
          try {
              $em->flush();
              $this->get('session')->getFlashBag()->add('success', 'La vacuna se editó al sistema correctamente.');
              return $this->redirectToRoute("vacuna_index");
          } catch (\Exception $e) {
              $this->get('session')->getFlashBag()->add('error', 'No se ha podido editar la vacuna en el sistema. Detalle: ' . $e->getMessage());
          }
        }
        if ($editForm->isSubmitted() && !$editForm->isValid()) {
            $validator = $this->get('validator');
            $errors = $validator->validate($vacuna);
            foreach ($errors as $error) {
                $this->get('session')->getFlashBag()->add('error', $error->getMessage());
            }
        }
        return $this->render('vacuna/edit.html.twig', array(
            'vacuna' => $vacuna,
            'edit_form' => $editForm->createView(),
        ));
    }

    /**
     * Deletes a vacuna entity.
     *
     * @Route("/{id}/delete", name="vacuna_delete")
     * @Method("POST")
     */
    public function deleteAction(Request $request,Vacuna $vacuna)
    {
      $em = $this->getDoctrine()->getManager();
      try {
          $em->remove($vacuna);
          $em->flush();
          return new JsonResponse(array('success' => true, 'message' => 'La vacuna fue eliminado con éxito'));
      } catch (\Exception $e) {
          return new JsonResponse(array('success' => false, 'message' => 'Error al intentar eliminar la vacuna del sistema'));
      }
    }

}
