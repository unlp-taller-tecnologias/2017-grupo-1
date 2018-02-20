<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Vacuna;

/**
 * Graficos controller.
 *
 * @Route("graficos")
 */

class GraficosController extends Controller{

    private function itHasOnlyNumbers($data){
      $regEx="/^[0-9]+$/";
      foreach($data as $info){
        if(!preg_match($regEx,$info)){
          return false;
        }
      }
      return true;
    }

    private function rangeArray(){
      $numbers=array('SI'=>0,'NO'=>0);
      $ranges=array(
        '15-19'=>$numbers,
        '20-24'=>$numbers,
        '25-29'=>$numbers,
        '30-34'=>$numbers,
        '35-39'=>$numbers,
        '40-44'=>$numbers,
        '45-49'=>$numbers,
        '50-54'=>$numbers,
        '55-59'=>$numbers,
        '60-64'=>$numbers,
        '65+'=>$numbers
      );
      return $ranges;
    }

    /**
     * @Route("/quienCumple",name="quien_cumple_grafico")
     */
    public function quienCumpleAction()
    {
      $em=$this->getDoctrine()->getManager();
      $data=$this->rangeArray();
      $sql="SELECT COUNT(*) as total,cumple,
	           CASE
		           WHEN TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaActualizacion) BETWEEN 15 AND 19 THEN '15-19'
		           WHEN TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaActualizacion) BETWEEN 20 AND 24 THEN '20-24'
		           WHEN TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaActualizacion) BETWEEN 25 AND 29 THEN '25-29'
		           WHEN TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaActualizacion) BETWEEN 30 AND 34 THEN '30-34'
		           WHEN TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaActualizacion) BETWEEN 35 AND 39 THEN '35-39'
		           WHEN TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaActualizacion) BETWEEN 40 AND 44 THEN '40-44'
		           WHEN TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaActualizacion) BETWEEN 45 AND 49 THEN '45-49'
		           WHEN TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaActualizacion) BETWEEN 50 AND 54 THEN '50-54'
		           WHEN TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaActualizacion) BETWEEN 55 AND 59 THEN '55-59'
		           WHEN TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaActualizacion) BETWEEN 60 AND 64 THEN '60-64'
		           WHEN TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaActualizacion) > 64 THEN '65+'
               WHEN TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaCreacion) BETWEEN 15 AND 19 THEN '15-19'
               WHEN TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaCreacion) BETWEEN 20 AND 24 THEN '20-24'
               WHEN TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaCreacion) BETWEEN 25 AND 29 THEN '25-29'
               WHEN TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaCreacion) BETWEEN 30 AND 34 THEN '30-34'
               WHEN TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaCreacion) BETWEEN 35 AND 39 THEN '35-39'
               WHEN TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaCreacion) BETWEEN 40 AND 44 THEN '40-44'
               WHEN TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaCreacion) BETWEEN 45 AND 49 THEN '45-49'
               WHEN TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaCreacion) BETWEEN 50 AND 54 THEN '50-54'
               WHEN TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaCreacion) BETWEEN 55 AND 59 THEN '55-59'
               WHEN TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaCreacion) BETWEEN 60 AND 64 THEN '60-64'
               WHEN TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaCreacion) > 64 THEN '65+'
               ELSE 'Invalido'
	           END as rango
             FROM visitante INNER JOIN registro_vacunacion ON visitante.registroVacunacion_id=registro_vacunacion.id
             GROUP BY cumple, CASE
 		           WHEN TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaActualizacion) BETWEEN 15 AND 19 THEN '15-19'
 		           WHEN TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaActualizacion) BETWEEN 20 AND 24 THEN '20-24'
 		           WHEN TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaActualizacion) BETWEEN 25 AND 29 THEN '25-29'
 		           WHEN TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaActualizacion) BETWEEN 30 AND 34 THEN '30-34'
 		           WHEN TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaActualizacion) BETWEEN 35 AND 39 THEN '35-39'
 		           WHEN TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaActualizacion) BETWEEN 40 AND 44 THEN '40-44'
 		           WHEN TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaActualizacion) BETWEEN 45 AND 49 THEN '45-49'
 		           WHEN TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaActualizacion) BETWEEN 50 AND 54 THEN '50-54'
 		           WHEN TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaActualizacion) BETWEEN 55 AND 59 THEN '55-59'
 		           WHEN TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaActualizacion) BETWEEN 60 AND 64 THEN '60-64'
 		           WHEN TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaActualizacion) > 64 THEN '65+'
               WHEN TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaCreacion) BETWEEN 15 AND 19 THEN '15-19'
               WHEN TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaCreacion) BETWEEN 20 AND 24 THEN '20-24'
               WHEN TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaCreacion) BETWEEN 25 AND 29 THEN '25-29'
               WHEN TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaCreacion) BETWEEN 30 AND 34 THEN '30-34'
               WHEN TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaCreacion) BETWEEN 35 AND 39 THEN '35-39'
               WHEN TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaCreacion) BETWEEN 40 AND 44 THEN '40-44'
               WHEN TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaCreacion) BETWEEN 45 AND 49 THEN '45-49'
               WHEN TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaCreacion) BETWEEN 50 AND 54 THEN '50-54'
               WHEN TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaCreacion) BETWEEN 55 AND 59 THEN '55-59'
               WHEN TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaCreacion) BETWEEN 60 AND 64 THEN '60-64'
               WHEN TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaCreacion) > 64 THEN '65+'
 	           END
             ORDER BY cumple DESC";
      try {
        $stm=$em->getConnection()->prepare($sql);
        $stm->execute();
        $values=$stm->fetchAll();
      } catch (\Exception $e) {
        $this->get('session')->getFlashBag()->add('error','Ha habido un problema en la base de datos');
        return $this->redirectToRoute('homepage');
      }
      $isThereNegativeData=$isTherePositiveData=0;
      foreach($values as $value){
        if($value['rango']!='Invalido'){
          if($value['cumple']==0){
            $data[$value['rango']]['NO']=$value['total'];
            $isThereNegativeData=true;
          }
          else{
            $data[$value['rango']]['SI']=$value['total'];
            $isTherePositiveData=true;
          }
        }
      }
      if((!$isTherePositiveData&&!$isThereNegativeData)){
        $this->get('session')->getFlashBag()->add('error', 'No existen datos suficientes para mostrar el grafico de personas que cumplieron con el calendario de vacunacion.');
        return $this->redirectToRoute("homepage");
      }
      return $this->render('graficos/quien_cumple.html.twig', array(
        'data'=>$data,
        'negative'=>$isThereNegativeData,
        'positive'=>$isTherePositiveData
      ));
    }

    /**
     * @Route("/dosisRecibidasIndex",name="dosis_recibidas")
     * @Method({"GET"})
     */
    public function dosisRecibidasIndexAction(){
      $em=$this->getDoctrine()->getManager();
      $vacunas=$em->getRepository('AppBundle:Vacuna')->findAll();
      return $this->render('graficos/dosis_recibidas_index.html.twig', array(
          'vacunas'=>$vacunas
      ));
    }

    /**
     * @Route("/dosisRecibidas",name="dosis_recibidas_grafico")
     * @Method({"POST"})
     */
    public function dosisRecibidasGraficoIndexAction(Request $request){
      $vacunas=$request->get('vacunas');
      if($vacunas==NULL||empty($vacunas)){
        $this->get('session')->getFlashBag()->add('error', 'No se seleccionaron vacunas para mostrar el grafico.');
        return $this->redirectToRoute("dosis_recibidas");
      }
      elseif(!$this->itHasOnlyNumbers($vacunas)){
        //SI PASA ESTO, ES GRAVE! (No tanto,)
        $this->get('session')->getFlashBag()->add('error', 'Ha habido un error en el sistema. Intente nuevamente');
        return $this->redirectToRoute("dosis_recibidas");
      }
      $dosis=array_diff($request->get('dosis'),array(''));
      if($dosis==NULL||empty($dosis)){
        $this->get('session')->getFlashBag()->add('error', 'No se ingresaron dosis para poder mostrar el grafico.');
        return $this->redirectToRoute("dosis_recibidas");
      }
      elseif(!$this->itHasOnlyNumbers($dosis)){
        $this->get('session')->getFlashBag()->add('error', 'No deben ingresarse caracteres que no sean numeros a la cantidad de dosis.');
        return $this->redirectToRoute("dosis_recibidas");
      }
      $lastV=$vacunas[count($vacunas)-1];
      $where="";
      $i=1;
      foreach($vacunas as $vacuna){
        $where.="registroVacunacion_id IN (SELECT registroVacunacion_id FROM componente WHERE vacuna_id=:vacuna$i and dosisRecibidas>=:dosis$i)";
        if($vacuna!=$lastV){
          $where.=" AND ";
          $i++;
        }
      }
      $em=$this->getDoctrine()->getManager();
      $ranges=$this->rangeArray();
      $sql1="SELECT COUNT(*) as total,
	           CASE
		           WHEN TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaActualizacion) BETWEEN 15 AND 19 OR TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaCreacion) BETWEEN 15 AND 19 THEN '15-19'
		           WHEN TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaActualizacion) BETWEEN 20 AND 24 OR TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaCreacion) BETWEEN 20 AND 24 THEN '20-24'
		           WHEN TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaActualizacion) BETWEEN 25 AND 29 OR TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaCreacion) BETWEEN 25 AND 29 THEN '25-29'
		           WHEN TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaActualizacion) BETWEEN 30 AND 34 OR TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaCreacion) BETWEEN 30 AND 34 THEN '30-34'
		           WHEN TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaActualizacion) BETWEEN 35 AND 39 OR TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaCreacion) BETWEEN 35 AND 39 THEN '35-39'
		           WHEN TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaActualizacion) BETWEEN 40 AND 44 OR TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaCreacion) BETWEEN 40 AND 44 THEN '40-44'
		           WHEN TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaActualizacion) BETWEEN 45 AND 49 OR TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaCreacion) BETWEEN 45 AND 49 THEN '45-49'
		           WHEN TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaActualizacion) BETWEEN 50 AND 54 OR TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaCreacion) BETWEEN 50 AND 54 THEN '50-54'
		           WHEN TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaActualizacion) BETWEEN 55 AND 59 OR TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaCreacion) BETWEEN 55 AND 59 THEN '55-59'
		           WHEN TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaActualizacion) BETWEEN 60 AND 64 OR TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaCreacion) BETWEEN 60 AND 64 THEN '60-64'
		           WHEN TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaActualizacion) > 64 OR TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaCreacion) > 64 THEN '65+'
               ELSE 'Invalido'
	           END as rango
             FROM visitante INNER JOIN registro_vacunacion ON visitante.registroVacunacion_id=registro_vacunacion.id
             WHERE ".$where."
             GROUP BY CASE
               WHEN TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaActualizacion) BETWEEN 15 AND 19 OR TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaCreacion) BETWEEN 15 AND 19 THEN '15-19'
               WHEN TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaActualizacion) BETWEEN 20 AND 24 OR TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaCreacion) BETWEEN 20 AND 24 THEN '20-24'
               WHEN TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaActualizacion) BETWEEN 25 AND 29 OR TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaCreacion) BETWEEN 25 AND 29 THEN '25-29'
               WHEN TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaActualizacion) BETWEEN 30 AND 34 OR TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaCreacion) BETWEEN 30 AND 34 THEN '30-34'
               WHEN TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaActualizacion) BETWEEN 35 AND 39 OR TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaCreacion) BETWEEN 35 AND 39 THEN '35-39'
               WHEN TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaActualizacion) BETWEEN 40 AND 44 OR TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaCreacion) BETWEEN 40 AND 44 THEN '40-44'
               WHEN TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaActualizacion) BETWEEN 45 AND 49 OR TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaCreacion) BETWEEN 45 AND 49 THEN '45-49'
               WHEN TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaActualizacion) BETWEEN 50 AND 54 OR TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaCreacion) BETWEEN 50 AND 54 THEN '50-54'
               WHEN TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaActualizacion) BETWEEN 55 AND 59 OR TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaCreacion) BETWEEN 55 AND 59 THEN '55-59'
               WHEN TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaActualizacion) BETWEEN 60 AND 64 OR TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaCreacion) BETWEEN 60 AND 64 THEN '60-64'
               WHEN TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaActualizacion) > 64 OR TIMESTAMPDIFF(YEAR,fechaNacimiento,fechaCreacion) > 64 THEN '65+'
 	           END
          ";
          $sql2=str_replace('>=', '<', $sql1);
          $isThereNegativeData=$isTherePositiveData=0;
          try {
            $stm1=$em->getConnection()->prepare($sql1);
            $stm2=$em->getConnection()->prepare($sql2);
            $i=1;
            foreach ($dosis as $vacuna => $dose) {
              $stm1->bindValue(":vacuna$i",$vacuna);
              $stm1->bindValue(":dosis$i",$dose);
              $stm2->bindValue(":vacuna$i",$vacuna);
              $stm2->bindValue(":dosis$i",$dose);
              $i++;
            }
            $stm1->execute();
            $stm2->execute();
          } catch (\Exception $e) {
            $this->get('session')->getFlashBag()->add('error','Ha habido un problema en la base de datos');
            return $this->redirectToRoute('dosis_recibidas');
          }
          $values=$stm1->fetchAll();
          foreach($values as $value){
            if($value['rango']!='Invalido'){
              $ranges[$value['rango']]['SI']=$value['total'];
              $isTherePositiveData=true;
            }
          }
          $values=$stm2->fetchAll();
          foreach($values as $value){
            if($value['rango']!='Invalido'){
              $ranges[$value['rango']]['NO']=$value['total'];
              $isThereNegativeData=true;
            }
          }
          if(!$isTherePositiveData&&!$isThereNegativeData){
            $this->get('session')->getFlashBag()->add('error', 'No existen datos suficientes para mostrar el grafico de personas que recibieron dosis para las vacunas seleccionadas.');
            return $this->redirectToRoute("dosis_recibidas");
          }
          return $this->render('graficos/dosis_recibidas_grafico.html.twig',array(
            'data'=>$ranges,
            'negative'=>$isThereNegativeData,
            'positive'=>$isTherePositiveData
          ));
    }

    /**
     * @Route("/reporte",name="reporte_show")
     * @Method({"POST"})
     */

    public function reporteShow(Request $request){
      $v=$request->get('vac');
      if($v==NULL){
        $this->get('session')->getFlashBag()->add('error', 'No se seleccionaron vacunas para mostrar el vencimiento.');
        return $this->redirectToRoute('reporte_index');
      }
      $em=$this->getDoctrine()->getManager();
      $insc=$em->getRepository('AppBundle:Inscripto')->findAll();
      $ndoc=$em->getRepository('AppBundle:NoDocente')->findAll();
      $vac=$em->getRepository('AppBundle:Vacuna')->findBy(array('id'=>$v));
      $visit=array_merge($insc,$ndoc);
      $values=array();
      foreach($visit as $data){
        $rvd=$data->getRegistroVacunacion();
        if($rvd!=NULL&&$rvd->getCumple()==1){
          $values[]=$data;
        }
      }
      return $this->render('graficos/reporte_show.html.twig',array(
        'data'=>$values,
        'vac'=>$vac,
        'vselec'=>count($v)
      ));
    }

    /**
     * @Route("/reporteIndex",name="reporte_index")
     * @Method({"GET"})
     */

    public function reporteIndex(){
      $em=$this->getDoctrine()->getManager();
      $vac=$em->getRepository('AppBundle:Vacuna')->findBy(array('tieneVencimiento'=>1));
      return $this->render('graficos/reporte_index.html.twig',array(
        'vac'=>$vac
      ));
    }

}
