<?php

namespace App\Controller;

use \Norm\Controller\NormController;
use Norm\Norm;
use Dompdf\Dompdf;


class PekerjaanController extends AppController
{


    public function mapRoute(){
        parent::mapRoute();

        $this->map('/laporan_pekerjaan/export', 'laporan')->via('GET', 'POST');

        
    }

    public function laporan () {

        $model_pekerjaan = Norm::factory('Pekerjaan')->find();
       

        $dompdf = new Dompdf();
        $template = $this->app->theme->partial('pdf/laporan_pekerjaan', array(
            'model_pekerjaan' => $model_pekerjaan,

           
        ));
       
        $dompdf->setPaper('A4', 'portait');
        $dompdf->loadHtml($template);
        $dompdf->render();
        $dompdf->stream('laporan_pekerjaan.pdf', array("Attachment" => false));
        exit;
    }

   
   
    

}