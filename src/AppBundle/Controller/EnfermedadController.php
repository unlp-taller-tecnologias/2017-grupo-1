<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Enfermedad;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Enfermedad controller.
 *
 * @Route("enfermedad")
 */
class EnfermedadController extends Controller
{
    /**
     * Lists all enfermedad entities.
     *
     * @Route("/", name="enfermedad_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $enfermedads = $em->getRepository('AppBundle:Enfermedad')->findAll();

        return $this->render('enfermedad/index.html.twig', array(
            'enfermedads' => $enfermedads,
        ));
    }

    /**
     * Creates a new enfermedad entity.
     *
     * @Route("/new", name="enfermedad_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $enfermedad = new Enfermedad();
        $form = $this->createForm('AppBundle\Form\EnfermedadType', $enfermedad);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($enfermedad);
            $em->flush();

            return $this->redirectToRoute('enfermedad_show', array('id' => $enfermedad->getId()));
        }

        return $this->render('enfermedad/new.html.twig', array(
            'enfermedad' => $enfermedad,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a enfermedad entity.
     *
     * @Route("/{id}", name="enfermedad_show")
     * @Method("GET")
     */
    public function showAction(Enfermedad $enfermedad)
    {
        $deleteForm = $this->createDeleteForm($enfermedad);

        return $this->render('enfermedad/show.html.twig', array(
            'enfermedad' => $enfermedad,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing enfermedad entity.
     *
     * @Route("/{id}/edit", name="enfermedad_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Enfermedad $enfermedad)
    {
        $deleteForm = $this->createDeleteForm($enfermedad);
        $editForm = $this->createForm('AppBundle\Form\EnfermedadType', $enfermedad);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('enfermedad_edit', array('id' => $enfermedad->getId()));
        }

        return $this->render('enfermedad/edit.html.twig', array(
            'enfermedad' => $enfermedad,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a enfermedad entity.
     *
     * @Route("/{id}", name="enfermedad_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Enfermedad $enfermedad)
    {
        $form = $this->createDeleteForm($enfermedad);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($enfermedad);
            $em->flush();
        }

        return $this->redirectToRoute('enfermedad_index');
    }

    /**
     * Creates a form to delete a enfermedad entity.
     *
     * @param Enfermedad $enfermedad The enfermedad entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Enfermedad $enfermedad)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('enfermedad_delete', array('id' => $enfermedad->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
