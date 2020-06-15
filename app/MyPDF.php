<?php


namespace App;
use PDF;

class MyPDF extends PDF
{
    public function Footer()
    {

         //Position at 15 mm from bottom
        PDF::SetY(-25);
        // Set font
        PDF::SetFont('helvetica', 'I', 8);
        // Page number
        // $pdf->Cell(0, 10, 'Page '.$pdf->getAliasNumPage().'/'.$pdf->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
        $foot = view('kop', [
            'title' => 'tst'
        ]);
        PDF::writeHTML($foot);

    }
}
