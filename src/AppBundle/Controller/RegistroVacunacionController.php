<?php

namespace AppBundle\Controller;

use AppBundle\Entity\RegistroVacunacion;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Registrovacunacion controller.
 *
 * @Route("registrovacunacion")
 */
class RegistroVacunacionController extends Controller
{
    /**
     * Lists all registroVacunacion entities.
     *
     * @Route("/", name="registrovacunacion_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $registroVacunacions = $em->getRepository('AppBundle:RegistroVacunacion')->findAll();
        $vacunas = $em->getRepository('AppBundle:Vacuna')->findAll();

        return $this->render('registrovacunacion/index.html.twig', array(
            'registroVacunacions' => $registroVacunacions, 'vacunas' => $vacunas
        ));
    }

    /**
     * Creates a new registroVacunacion entity.
     *
     * @Route("/new", name="registrovacunacion_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $registroVacunacion = new Registrovacunacion();
        $form = $this->createForm('AppBundle\Form\RegistroVacunacionType', $registroVacunacion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($registroVacunacion);
            $em->flush();

            return $this->redirectToRoute('registrovacunacion_show', array('id' => $registroVacunacion->getId()));
        }

        return $this->render('registrovacunacion/new.html.twig', array(
            'registroVacunacion' => $registroVacunacion,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a registroVacunacion entity.
     *
     * @Route("/{id}", name="registrovacunacion_show")
     * @Method("GET")
     */
    public function showAction(RegistroVacunacion $registroVacunacion)
    {
        $deleteForm = $this->createDeleteForm($registroVacunacion);

        return $this->render('registrovacunacion/show.html.twig', array(
            'registroVacunacion' => $registroVacunacion,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing registroVacunacion entity.
     *
     * @Route("/{id}/edit", name="registrovacunacion_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, RegistroVacunacion $registroVacunacion)
    {
        $deleteForm = $this->createDeleteForm($registroVacunacion);
        $editForm = $this->createForm('AppBundle\Form\RegistroVacunacionType', $registroVacunacion);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('registrovacunacion_edit', array('id' => $registroVacunacion->getId()));
        }

        return $this->render('registrovacunacion/edit.html.twig', array(
            'registroVacunacion' => $registroVacunacion,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a registroVacunacion entity.
     *
     * @Route("/{id}", name="registrovacunacion_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, RegistroVacunacion $registroVacunacion)
    {
        $form = $this->createDeleteForm($registroVacunacion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($registroVacunacion);
            $em->flush();
        }

        return $this->redirectToRoute('registrovacunacion_index');
    }

    /**
     * Creates a form to delete a registroVacunacion entity.
     *
     * @param RegistroVacunacion $registroVacunacion The registroVacunacion entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(RegistroVacunacion $registroVacunacion)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('registrovacunacion_delete', array('id' => $registroVacunacion->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
