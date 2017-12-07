<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Inscripto;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Inscripto controller.
 *
 * @Route("inscripto")
 */
class InscriptoController extends Controller
{
    /**
     * Lists all inscripto entities.
     *
     * @Route("/", name="inscripto_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $inscriptos = $em->getRepository('AppBundle:Inscripto')->findAll();

        return $this->render('inscripto/index.html.twig', array(
            'inscriptos' => $inscriptos,
        ));
    }

    /**
     * Creates a new inscripto entity.
     *
     * @Route("/new", name="inscripto_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $inscripto = new Inscripto();
        $form = $this->createForm('AppBundle\Form\InscriptoType', $inscripto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($inscripto);
            $em->flush();

            return $this->redirectToRoute('inscripto_show', array('id' => $inscripto->getId()));
        }

        return $this->render('inscripto/new.html.twig', array(
            'inscripto' => $inscripto,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a inscripto entity.
     *
     * @Route("/{id}", name="inscripto_show")
     * @Method("GET")
     */
    public function showAction(Inscripto $inscripto)
    {
        $deleteForm = $this->createDeleteForm($inscripto);

        return $this->render('inscripto/show.html.twig', array(
            'inscripto' => $inscripto,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing inscripto entity.
     *
     * @Route("/{id}/edit", name="inscripto_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Inscripto $inscripto)
    {
        $deleteForm = $this->createDeleteForm($inscripto);
        $editForm = $this->createForm('AppBundle\Form\InscriptoType', $inscripto);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('inscripto_edit', array('id' => $inscripto->getId()));
        }

        return $this->render('inscripto/edit.html.twig', array(
            'inscripto' => $inscripto,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a inscripto entity.
     *
     * @Route("/{id}", name="inscripto_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Inscripto $inscripto)
    {
        $form = $this->createDeleteForm($inscripto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($inscripto);
            $em->flush();
        }

        return $this->redirectToRoute('inscripto_index');
    }

    /**
     * Creates a form to delete a inscripto entity.
     *
     * @param Inscripto $inscripto The inscripto entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Inscripto $inscripto)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('inscripto_delete', array('id' => $inscripto->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
