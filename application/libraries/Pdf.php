<?php
// require_once APPPATH.'libraries/dompdf/autoload.php';
require_once APPPATH.'../vendor/autoload.php';


use Dompdf\Dompdf;
use Dompdf\Options;

class Pdf {
    public function createPDF($html, $filename = 'document', $paper = 'A4', $orientation = 'portrait') {
        $options = new Options();
        $options->set('defaultFont', 'Courier');
        
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper($paper, $orientation);
        $dompdf->render();
        $dompdf->stream($filename.".pdf", array("Attachment" => false));
    }
}