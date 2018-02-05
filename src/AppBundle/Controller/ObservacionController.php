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
     * @Route("/{id}/{tipo}/new", name="observacion_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request, RegistroVacunacion $regvacunacion, $tipo) {
        $observacion = new Observacion();
        $form = $this->createForm('AppBundle\Form\ObservacionType', $observacion);
        $now = new \DateTime();
        $em = $this->getDoctrine()->getManager();
        $observacion->setCreadoPor($this->getUser());
        $observacion->setEsPrivada(($tipo == 'publica') ? false : true);
        $observacion->setActualizadoPor($this->getUser());
        $observacion->setFechaActualizacion($now);
        $observacion->setFechaCreacion($now);
        $regvacunacion->addObservacion($observacion);
        $form->handleRequest($request);
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

    /**
     * Editar una observacion.
     *
     * @Route("/{id}/edit", name="observacion_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Observacion $observacion) {
        $form = $this->createForm('AppBundle\Form\ObservacionType', $observacion);
        $now = new \DateTime();
        $em = $this->getDoctrine()->getManager();
        //$observacion->setEsPrivada(false);
        $observacion->setActualizadoPor($this->getUser());
        $observacion->setFechaActualizacion($now);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($observacion);
            try {
                $em->flush();
                return new JsonResponse(array('success' => 1, 'message' => 'La observación se modificó correctamente.'));
            } catch (\Exception $e) {
                $this->get('session')->getFlashBag()->add('error', 'No se ha podido modificar la observación en el sistema. Detalle: ' . $e->getMessage());
            }
        }
        if ($form->isSubmitted() && !$form->isValid()) {
            return new JsonResponse(array('success' => 0, 'message' => 'No se pudo modificar la observación. Verifique que los campos ingresados sean correctos.'));
        }
        return $this->render('observacion/new.html.twig', array(
                    'entity' => $observacion,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Eliminar una observacion
     *
     * @Route("/{id}/delete", name="observacion_delete")
     * @Method("POST")
     */
    public function deleteAction(Request $request, Observacion $observacion) {
        $em = $this->getDoctrine()->getManager();
        $reg_vacunacion = $observacion->getRegistroVacunacion();
        $reg_vacunacion->removeObservacion($observacion);
        $em->persist($reg_vacunacion);
        $em->remove($observacion);
        try {
            $em->flush();
            return new JsonResponse(array('success' => 1, 'message' => 'La observación se eliminó del sistema correctamente.'));
        } catch (\Exception $e) {
            return new JsonResponse(array('success' => 0, 'message' => 'No se pudo eliminar la observación del sistema.'));
        }
    }

}
