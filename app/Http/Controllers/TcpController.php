<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use App\MyPDF;
use Illuminate\Http\Request;
use Elibyy\TCPDF\Facades\TCPDF;
use Illuminate\Support\Facades\Response;
use PDF;

class TcpController extends Controller
{
    public function get_pdf($kode)
    {
        // set certificate file
        $certificate = 'file://' . realpath('../public/crt/alice.crt');
        $private_key = 'file://' . realpath('../public/crt/alice.key');

//        dd(realpath('../public/crt/alice.crt'));
        $view = view('tcpdf', [
            'title' => 'tst'
        ]);
        $html = $view->render();
        $pdf = new TCPDF();
        $pdf::changeFormat('A6');
        $pdf::AddPage();
        $pdf::writeHTML($html);

        $info = array(
            'Name' => 'Name of PDF',
            'Location' => '',
            'Reason' => 'Proof of author',
            'ContactInfo' => 'info@example.co.za',
        );


// set document signature
        $pdf::setSignature($certificate, $private_key, '', '', 2, $info);
        $pdf::setSignatureAppearance(180, 60, 15, 15);
//        $pdf::Image(asset('lks_1544339140.png'), 180, 60, 15, 15, 'PNG');

        $pdf_path = storage_path(env('STORAGE_PATH')) . '/testa.pdf';
        $pdf_out = $pdf::Output($pdf_path, 'F');
        $pdf::reset();
        return Response::download($pdf_path, $kode . 'test' . now() . '.pdf', [
            'Content-length : ' . filesize($pdf_path)
        ]);
    }

    public function test($kode)
    {
        $certificate = 'file://' . realpath('../public/crt/alice.crt');
        $private_key = 'file://' . realpath('../public/crt/alice.key');
        $surat = Surat::find($kode);


        // set additional information in the signature
        $info = array(
            'Name' => 'Test TCPDF',
            'Location' => 'Rumah Ilham',
            'Reason' => 'Pengen Coba-Coba',
            'ContactInfo' => 'git',
        );
        $pdf = new MyPDF();
        // set document signature

        $pdf::setSignature($certificate, $private_key, 'tcpdfdemo', '', 2, $info);


        $pdf::changeFormat('A4');
        $pdf::SetFont('helvetica', '', 12);
        $pdf::SetTitle('Hello World');
        $pdf::SetAutoPageBreak(TRUE, 20);
        $pdf::SetMargins(10, 10, 10, true); //$left $top $$right
        $pdf::AddPage();

        $pdf::setPrintFooter(true);
        $pdf::SetFooterMargin(10);
        $pdf::setFooterCallback(function ($pdfq) use ($pdf) {

            // Position at 15 mm from bottom
            $pdfq->SetY(-25);
            // Set font
            $pdfq->SetFont('helvetica', 'I', 8);
            // Page number
            // $pdf->Cell(0, 10, 'Page '.$pdf->getAliasNumPage().'/'.$pdf->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
            $foot = view('kop', [
                'title' => 'tst'
            ]);
            $pdfq->writeHTML($foot);
//            $pdf->Footer();
        });

        // print a line of text
        $text = view('tcpdf', [
            'data' => $surat
        ]);

        // add view content
        $pdf::writeHTML($text, true, 0, true, 0);

        $style = array(
            'border' => 0,
            'vpadding' => 'auto',
            'hpadding' => 'auto',
            'fgcolor' => array(0, 0, 0),
            'bgcolor' => false, //array(255,255,255)
            'module_width' => 1, // width of a single module in points
            'module_height' => 1 // height of a single module in points
        );
        // QRCODE,L : QR-CODE Low error correction
        // QRCODE,H : QR-CODE Best error correction
        $pdf::write2DBarcode(route('page.surat.detail',['kode' => $surat->id]), 'QRCODE,H', 140, 210, 25, 25, $style, 'N');
        $pdf::Text(140, 205, 'Kepala Dinas -----');


//        $pdf::Image('lks.png', 180, 60, 15, 15, 'PNG');
//        $pdf::setPrintFooter(true);

        // define active area for signature appearance
        $pdf::setSignatureAppearance(180, 60, 15, 15);
        // add image for signature
//        $pdf->Footer();

        //Custom Footer

        // save pdf file
        $pdf::Output(storage_path(env('STORAGE_PATH')) . '/hello.pdf', 'F');
        $pdf::reset();


        dd('pdf created');
    }

    public function Footer()
    {

    }
}
