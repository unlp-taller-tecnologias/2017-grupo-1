<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Vacuna;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

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

            return $this->redirectToRoute('vacuna_show', array('id' => $vacuna->getId()));
        }

        return $this->render('vacuna/new.html.twig', array(
            'vacuna' => $vacuna,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a vacuna entity.
     *
     * @Route("/{id}", name="vacuna_show")
     * @Method("GET")
     */
    public function showAction(Vacuna $vacuna)
    {
        $deleteForm = $this->createDeleteForm($vacuna);

        return $this->render('vacuna/show.html.twig', array(
            'vacuna' => $vacuna,
            'delete_form' => $deleteForm->createView(),
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
        $deleteForm = $this->createDeleteForm($vacuna);
        $editForm = $this->createForm('AppBundle\Form\VacunaType', $vacuna);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('vacuna_edit', array('id' => $vacuna->getId()));
        }

        return $this->render('vacuna/edit.html.twig', array(
            'vacuna' => $vacuna,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a vacuna entity.
     *
     * @Route("/{id}", name="vacuna_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Vacuna $vacuna)
    {
        $form = $this->createDeleteForm($vacuna);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($vacuna);
            $em->flush();
        }

        return $this->redirectToRoute('vacuna_index');
    }

    /**
     * Creates a form to delete a vacuna entity.
     *
     * @param Vacuna $vacuna The vacuna entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Vacuna $vacuna)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('vacuna_delete', array('id' => $vacuna->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

    /**
     * @Route("/altaVacunaAction", name="altaVacunaAction")
     
    public function altaVacunaAction(Request $request)
    {
        try {
            $vacuna = new Vacuna();
            $hospedaje->setNombre($request->get('nombre'));
            $hospedaje->setAbreviatura($request->get('abreviatura'));
            $hospedaje->setDescripcion($request->get('descripcion'));

            $em = $this->getDoctrine()->getManager();
            $em->persist($vacuna);
            $em->flush();

            $this->get('session')->getFlashBag()->add('success', 'La vacuna se dio de alta exitosamente.');
            return $this->redirect($this->generateUrl('vacuna'));
        } catch (ORMException $e) {
            $this->get('session')->getFlashBag()->add('error', 'Error inesperado, intente nuevamente.');
            return $this->redirect($this->generateUrl('vacuna'));
        }
        
    }
    */