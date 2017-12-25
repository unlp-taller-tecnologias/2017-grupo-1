<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Graficos controller.
 *
 * @Route("graficos")
 */

class GraficosController extends Controller{

    private function rangeArray(){
      $numbers=array('NO'=>0,'SI'=>0);
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
     * @Route("/",name="graficos_index")
     */
    public function indexGraficosAction(){
        return $this->render('graficos/index_graficos.html.twig', array(

        ));
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
      $stm=$em->getConnection()->prepare($sql);
      $stm->execute();
      $values=$stm->fetchAll();
      $isThereData=false;
      foreach($values as $value){
        if($value['rango']!='Invalido'){
          $isThereData=true;
          if($value['cumple']==0){
            $data[$value['rango']]['NO']=$value['total'];
          }
          else{
            $data[$value['rango']]['SI']=$value['total'];
          }
        }
      }
      if(!$isThereData){
        exit();
      }
      return $this->render('graficos/quien_cumple.html.twig', array(
        'data'=>$data
      ));
    }

    /**
     * @Route("/dosisRecibidasIndex",name="seleccion_dosis")
     */
    public function dosisRecibidasIndexAction()
    {
        return $this->render('graficos/dosis_recibidas_index.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/dosisRecibidasGrafico",name="dosis_recibidas_graficos")
     */
    public function dosisRecibidasGraficoAction()
    {
        return $this->render('graficos/dosis_recibidas_grafico.html.twig', array(
            // ...
        ));
    }

}