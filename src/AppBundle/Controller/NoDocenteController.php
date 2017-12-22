<?php

namespace AppBundle\Controller;

use AppBundle\Entity\NoDocente;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Nodocente controller.
 *
 * @Route("nodocente")
 */
class NoDocenteController extends Controller
{
    /**
     * Lists all noDocente entities.
     *
     * @Route("/", name="nodocente_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $noDocentes = $em->getRepository('AppBundle:NoDocente')->findAll();

        return $this->render('nodocente/index.html.twig', array(
            'noDocentes' => $noDocentes,
        ));
    }

    /**
     * Creates a new noDocente entity.
     *
     * @Route("/new", name="nodocente_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $noDocente = new Nodocente();
        $form = $this->createForm('AppBundle\Form\NoDocenteType', $noDocente);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($noDocente);
            try {
                $em->flush();
                $this->get('session')->getFlashBag()->add('success', 'El usuario se agregó al sistema correctamente.');
                return $this->redirectToRoute("usuario_new");
            } catch (\Exception $e) {
                $this->get('session')->getFlashBag()->add('error', 'No se ha podido agregar el usuario en el sistema. Detalle: ' . $e->getMessage());
            }
          }
          if ($form->isSubmitted() && !$form->isValid()) {
              $validator = $this->get('validator');
              $errors = $validator->validate($noDocente);
              foreach ($errors as $error) {
                  $this->get('session')->getFlashBag()->add('error', $error->getMessage());
              }
          }
          return $this->render('nodocente/new.html.twig', array(
                      'form' => $form->createView(),
          ));
    }

    /**
     * Finds and displays a noDocente entity.
     *
     * @Route("/{id}", name="nodocente_show")
     * @Method("GET")
     */
    public function showAction(NoDocente $noDocente)
    {
        $deleteForm = $this->createDeleteForm($noDocente);

        return $this->render('nodocente/show.html.twig', array(
            'noDocente' => $noDocente,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing noDocente entity.
     *
     * @Route("/{id}/edit", name="nodocente_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, NoDocente $noDocente)
    {
        $deleteForm = $this->createDeleteForm($noDocente);
        $editForm = $this->createForm('AppBundle\Form\NoDocenteType', $noDocente);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('nodocente_edit', array('id' => $noDocente->getId()));
        }

        return $this->render('nodocente/edit.html.twig', array(
            'noDocente' => $noDocente,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a noDocente entity.
     *
     * @Route("/{id}/delete", name="nodocente_delete")
     * @Method("POST")
     */
    public function deleteAction(Request $request, NoDocente $noDocente)
    {
      $em = $this->getDoctrine()->getManager();
      try {
          $em->remove($noDocente);
          $em->flush();
          return new JsonResponse(array('success' => true, 'message' => 'El no docente fue eliminado con éxito'));
      } catch (\Exception $e) {
          return new JsonResponse(array('success' => false, 'message' => 'Error al intentar eliminar el no docente del sistema'));
      }
    }

}
