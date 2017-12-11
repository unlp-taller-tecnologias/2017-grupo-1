<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Visitante;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Visitante controller.
 *
 * @Route("visitante")
 */
class VisitanteController extends Controller
{
    /**
     * Lists all visitante entities.
     *
     * @Route("/", name="visitante_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $visitantes = $em->getRepository('AppBundle:Visitante')->findAll();

        return $this->render('visitante/index.html.twig', array(
            'visitantes' => $visitantes,
        ));
    }

    /**
     * Creates a new visitante entity.
     *
     * @Route("/new", name="visitante_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $visitante = new Visitante();
        $form = $this->createForm('AppBundle\Form\VisitanteType', $visitante);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($visitante);
            $em->flush();

            return $this->redirectToRoute('visitante_show', array('id' => $visitante->getId()));
        }

        return $this->render('visitante/new.html.twig', array(
            'visitante' => $visitante,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a visitante entity.
     *
     * @Route("/{id}", name="visitante_show")
     * @Method("GET")
     */
    public function showAction(Visitante $visitante)
    {
        $deleteForm = $this->createDeleteForm($visitante);

        return $this->render('visitante/show.html.twig', array(
            'visitante' => $visitante,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing visitante entity.
     *
     * @Route("/{id}/edit", name="visitante_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Visitante $visitante)
    {
        $deleteForm = $this->createDeleteForm($visitante);
        $editForm = $this->createForm('AppBundle\Form\VisitanteType', $visitante);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('visitante_edit', array('id' => $visitante->getId()));
        }

        return $this->render('visitante/edit.html.twig', array(
            'visitante' => $visitante,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a visitante entity.
     *
     * @Route("/{id}", name="visitante_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Visitante $visitante)
    {
        $form = $this->createDeleteForm($visitante);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($visitante);
            $em->flush();
        }

        return $this->redirectToRoute('visitante_index');
    }

    /**
     * Creates a form to delete a visitante entity.
     *
     * @param Visitante $visitante The visitante entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Visitante $visitante)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('visitante_delete', array('id' => $visitante->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

}
