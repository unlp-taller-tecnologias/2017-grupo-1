<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use AppBundle\Entity\Visitante;

/**
 * @Route("/validacion")
 */
class ValidacionController extends Controller {

    /**
     * @Route("/", name="validacion_login")
     */
    public function indexAction(Request $request) {
        return $this->render('validacion/login.html.twig', array(
                    'last_username' => '',
                    'error' => null
        ));
    }

    /**
     * @Route("/checkin", name="validacion_check")
     * @Method({"POST"})
     */
    public function validacionAction(Request $request) {
        $error = null;
        //echo $request->get("validacion_documento") ; die();
        if ($request->get("validacion_fnacimiento") == '' || (strtotime($request->get("validacion_fnacimiento")) == FALSE)) {
            $this->get('session')->getFlashBag()->add('error', 'El campo fecha de nacimiento no es válido.');
            $error = true;
        }
        if ($request->get("validacion_documento") == '' || (is_numeric($request->get("validacion_documento")) == FALSE)) {
            $this->get('session')->getFlashBag()->add('error', 'El campo número de documento no es válido.');
            $error = true;
        }
        if ($error == null) {
            $em = $this->getDoctrine()->getManager();
            $date = strtotime($request->get("validacion_fnacimiento"));
            $query = $em->createQuery(
                            'SELECT visitante
                            FROM AppBundle:Visitante visitante
                            WHERE visitante.nroDocumento = :nrodoc AND visitante.fechaNacimiento = :fecnac'
                    )->setParameter('nrodoc', $request->get("validacion_documento"))->setParameter('fecnac', date('Y-m-d', $date));
            $result = $query->getResult();
            if (count($result) > 0) {
                $persona = reset($result);
                return $this->redirectToRoute('validacion_estado', array(
                            'id' => $persona->getId()
                ));
            } else {
                $error = true;
                $this->get('session')->getFlashBag()->add('error', 'No se pudo encontrar a la persona en la base de datos.');
            }
        }
        return $this->render('validacion/login.html.twig', array(
                    'error' => $error
        ));
    }

    /**
     * @Route("/{id}/estado", name="validacion_estado")
     * @Method({"GET"})
     */
    public function estadoAction(Request $request, Visitante $visitante) {
        if ($visitante->getRegistroVacunacion() == NULL) {
            return $this->render('validacion/sinregistro.html.twig', array(
                        'entity' => $visitante
            ));
        }
        return $this->render('validacion/login.html.twig', array(
                    'error' => $error
        ));
    }

}
