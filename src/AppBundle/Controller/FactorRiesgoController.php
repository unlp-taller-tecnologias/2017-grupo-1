<?php

namespace AppBundle\Controller;

use AppBundle\Entity\FactorRiesgo;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Factorriesgo controller.
 *
 * @Route("factorriesgo")
 */
class FactorRiesgoController extends Controller
{
    /**
     * Lists all factorRiesgo entities.
     *
     * @Route("/", name="factorriesgo_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $factorRiesgos = $em->getRepository('AppBundle:FactorRiesgo')->findAll();
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
    public function newAction(Request $request)
    {
        $factorRiesgo = new Factorriesgo();
        $form = $this->createForm('AppBundle\Form\FactorRiesgoType', $factorRiesgo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($factorRiesgo);
            $em->flush();

            return $this->redirectToRoute('factorriesgo_show', array('id' => $factorRiesgo->getId()));
        }

        return $this->render('factorriesgo/new.html.twig', array(
            'factorRiesgo' => $factorRiesgo,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a factorRiesgo entity.
     *
     * @Route("/{id}", name="factorriesgo_show")
     * @Method("GET")
     */
    public function showAction($id)
    {
        try{
            $factorRiesgo = $this->getDoctrine()->getRepository(FactorRiesgo::class)->find($id);
            $deleteForm = $this->createDeleteForm($factorRiesgo);

            return $this->render('factorriesgo/show.html.twig', array(
                'factorRiesgo' => $factorRiesgo,
                'delete_form' => $deleteForm->createView(),
            ));

        }catch (NotFoundHttpException $e){
            exit("Nada");
        }
    }

    /**
     * Displays a form to edit an existing factorRiesgo entity.
     *
     * @Route("/{id}/edit", name="factorriesgo_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, FactorRiesgo $factorRiesgo)
    {
        $form = $this->createForm('AppBundle\Form\FactorRiesgoType', $factorRiesgo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $editForm->isValid()) {
          $em = $this->getDoctrine()->getManager();
          $em->persist($usuario);
          try {
              $em->flush();
              $this->get('session')->getFlashBag()->add('success', 'El factor de riesgo se editó correctamente.');
              return $this->redirectToRoute("factorriesgo_index");
          } catch (\Exception $e) {
              $this->get('session')->getFlashBag()->add('error', 'No se ha podido editar el factor de riesgo. Detalle: ' . $e->getMessage());
          }}
          if ($form->isSubmitted() && !$form->isValid()) {
              $validator = $this->get('validator');
              $errors = $validator->validate($usuario);
              foreach ($errors as $error) {
                  $this->get('session')->getFlashBag()->add('error', $error->getMessage());
              }
          }
        return $this->render('factorriesgo/edit.html.twig', array(
            'form' => $form->createView(),
            'entity'=>$factorRiesgo
        ));
    }

    /**
     * Deletes a factorRiesgo entity.
     *
     * @Route("/{id}", name="factorriesgo_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, FactorRiesgo $factorRiesgo)
    {
        $form = $this->createDeleteForm($factorRiesgo);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($factorRiesgo);
            $em->flush();
        }
        return $this->redirectToRoute('factorriesgo_index');
    }

    /**
     * Creates a form to delete a factorRiesgo entity.
     *
     * @param FactorRiesgo $factorRiesgo The factorRiesgo entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(FactorRiesgo $factorRiesgo)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('factorriesgo_delete', array('id' => $factorRiesgo->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
