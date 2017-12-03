<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class VisitanteController extends Controller
{
    /**
     * @Route("/visitante", name="visitante")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('visitante/index.html.twig');
    }

    /**
     * @Route("/altaVisitante", name="altaVisitante")
     */
    public function alta(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('visitante/alta.html.twig');
    }

    /**
     * @Route("/altaExcelView", name="altaExcelView")
     */
    public function altaExcel(Request $request)
    {
        return $this->render('visitante/index.html.twig');
    }

    /**
     * @Route("/altaExcel", name="altaExcel")
     */
    public function altaExcelAction(Request $request)
    {

        $nombreArchivo = $_FILES['excel']['name']; //captura el nombre del archivo
        $tipo = $_FILES['excel']['type']; //captura el tipo de archivo (2003 o 2007)

        // se cambia el nombre del archivo concatenando la fecha y hora actual al inicio del nombre real del archivo
        // para evitar errores en caso de que se ingresen dos archivos excel con el mismo nombre 
        date_default_timezone_set('America/Argentina/Buenos_Aires');
        $date = Date('Y:m:d:H:i:s-');
        $nombreArchivo = $date.$archivo;
        print_r($nombreArchivo); die();


        $destino = "./uploads/".$nombreArchivo; //lugar donde se copiara el archivo
 
        if (copy($_FILES['excel']['tmp_name'],$destino)){
            
        }




        $filename = $this->container->getParameter('kernel.root_dir').'/../web/uploads/bak_'.$archivo;
        // load the factory
        /** @var \Liuggio\ExcelBundle\Factory $reader */
        $factory = $this->get('phpexcel');
        // create a reader
        /** @var \PHPExcel_Reader_IReader $reader */
        $reader = $factory->createReader('Excel5');
        // check that the file can be read
        $canread = $reader->canRead($filename);
        // check that an empty temporary file cannot be read
        $someFile = tempnam($this->getParameter('kernel.root_dir'), "tmp");
        $cannotread = $reader->canRead($someFile);
        unlink($someFile);
        // load the excel file
        $phpExcelObject = $reader->load($filename);
        // read some data
        $sheet = $phpExcelObject->getActiveSheet();
        $hello = $sheet->getCell('A1')->getValue();
        $world = $sheet->getCell('B2')->getValue();

        print_r($hello);
        die();
    }
}