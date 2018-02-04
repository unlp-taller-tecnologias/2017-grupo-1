<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Observacion;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\RegistroVacunacion;
use Symfony\Component\HttpFoundation\JsonResponse;
use Doctrine\Common\Collections\Criteria;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * Enfermedad controller.
 *
 * @Route("observacion")
 */
class ObservacionController extends Controller {

    /**
     * Listado de observaciones publicas de un registro de vacunacion
     *
     * @Route("/{id}/listado_pubiico", name="observacion_publica_de")
     * @Method("GET")
     */
    public function getObservacionPublicaAction(RegistroVacunacion $regvacunacion) {
        $criteria = Criteria::create()
                ->where(Criteria::expr()->eq("esPrivada", 0))
                ->orderBy(array("fechaCreacion" => Criteria::ASC));
        return $this->render('observacion/listado.ajax.html.twig', array(
                    'observaciones' => $regvacunacion->getObservaciones()->matching($criteria),
        ));
    }

    /**
     * Listado de observaciones privadas de un registro de vacunacion
     *
     * @Route("/{id}/listado_privada", name="observacion_privada_de")
     * @Method("GET")
     */
    public function getObservacionPrivadaAction(RegistroVacunacion $regvacunacion) {
        $criteria = Criteria::create()
                ->where(Criteria::expr()->eq("esPrivada", 1))
                ->orderBy(array("fechaCreacion" => Criteria::ASC));
        return $this->render('observacion/listado.ajax.html.twig', array(
                    'observaciones' => $regvacunacion->getObservaciones()->matching($criteria),
        ));
    }

    /**
     * Creates a new Observacion entity.
     *
     * @Route("/{id}/new", name="observacion_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request, RegistroVacunacion $regvacunacion) {
        $observacion = new Observacion();
        $form = $this->createForm('AppBundle\Form\ObservacionType', $observacion);
        $form->handleRequest($request);
        $em = $this->getDoctrine()->getManager();
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($observacion);
            $em->persist($regvacunacion);
            try {
                $em->flush();
                return new JsonResponse(array('success' => 1, 'message' => 'La observación se agregó al sistema correctamente.'));
            } catch (\Exception $e) {
                $this->get('session')->getFlashBag()->add('error', 'No se ha podido agregar la observación en el sistema. Detalle: ' . $e->getMessage());
            }
        }
        if ($form->isSubmitted() && !$form->isValid()) {
            return new JsonResponse(array('success' => 0, 'message' => 'No se pudo guardar la observación. Verifique que los campos ingresados sean correctos.'));
        }
        return $this->render('observacion/new.html.twig', array(
                    'entity' => $observacion,
                    'form' => $form->createView(),
        ));
    }

}
