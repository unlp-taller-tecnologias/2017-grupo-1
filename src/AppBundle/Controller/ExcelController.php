<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\HttpFoundation\Response;

class ExcelController extends Controller
{
    /**
     * @Route("/importarExcel", name="importarExcel")
     */
    public function indexAction(Request $request)
    {
        return $this->render('AppBundle:Excel:index.html.twig');
    }

    /**
     * @Route("/phpToExcel", name="phpToExcel")
     */
    public function phpToExcelAction(Request $request)
    {
        // ask the service for a Excel5
       $phpExcelObject = $this->get('phpexcel')->createPHPExcelObject();

       $phpExcelObject->getProperties()->setCreator("Nombre del autor")
           ->setLastModifiedBy("Ultima persona que modifico")
           ->setTitle("Titulo")
           ->setSubject("Asunto")
           ->setDescription("Descripcion")
           ->setKeywords("Etiquetas")
           ->setCategory("Categorias");
       $phpExcelObject->setActiveSheetIndex(0)
           ->setCellValue('A1', 'Hello')
           ->setCellValue('B2', 'world!');
       $phpExcelObject->getActiveSheet()->setTitle('Simple');
       // Nombre de la primer hoja, Excel obrira esta hoja al ejecutarse.
       $phpExcelObject->setActiveSheetIndex(0);

        // create the writer
        $writer = $this->get('phpexcel')->createWriter($phpExcelObject, 'Excel5');
        // create the response
        $response = $this->get('phpexcel')->createStreamedResponse($writer);
        // adding headers
        $dispositionHeader = $response->headers->makeDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            'NombreDelArchvio.xls'
        );
        $response->headers->set('Content-Type', 'text/vnd.ms-excel; charset=utf-8');
        $response->headers->set('Pragma', 'public');
        $response->headers->set('Cache-Control', 'maxage=1');
        $response->headers->set('Content-Disposition', $dispositionHeader);

        return $response;        
    }

    /**
     * @Route("/ExcelToPhp", name="ExcelToPhp")
     */
    public function ExcelToPhpAction(Request $request)
    {

        $archivo = $_FILES['excel']['name']; //captura el nombre del archivo
        $tipo = $_FILES['excel']['type']; //captura el tipo de archivo (2003 o 2007)

        date_default_timezone_set('America/Argentina/Buenos_Aires');
        $date = Date('Y:m:d:H:i:s-');
        $archivo = $date.$archivo;
        print_r($archivo); die();
        $destino = "./uploads/".$archivo; //lugar donde se copiara el archivo
 
        if (copy($_FILES['excel']['tmp_name'],$destino)){ //si dese copiar la variable excel (archivo).nombreTemporal a destino (bak_.archivo) (
            
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
