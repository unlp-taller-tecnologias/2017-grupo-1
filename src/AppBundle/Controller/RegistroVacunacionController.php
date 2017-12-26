<?php

namespace AppBundle\Controller;

use AppBundle\Entity\RegistroVacunacion;
use AppBundle\Entity\Observacion;
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
     * @Route("/{id}/eliminarObservacion", name="eliminar_observacion")
     * @Method("GET")
     */
    public function deleteObservacionAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $idObservacion = $request->get("id");
        $observacion = $em->getRepository('AppBundle:Observacion')->find($idObservacion);
        $visitante = $em->getRepository('AppBundle:Visitante')->find($request->get("idVisitante"));
        $em->remove($observacion);
        try {
          $em->flush();
           $this->get('session')->getFlashBag()->add('success', 'La observacion se elimino exitosamente.');
           if ($visitante->getTipo() == 'Inscripto') {
                return $this->redirectToRoute("editar_registro", array('id' => $request->get("idVisitante")));
            }else{
                return $this->redirectToRoute("nodocente_index", array('id' => $request->get("idVisitante")));
            }
      } catch (\Exception $e) {
          return new JsonResponse(array('success' => false, 'message' => 'Error al intentar eliminar el no docente del sistema'));
      }
    }
}
