<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Mail;
use Session;
use Redirect;

class PDFController extends Controller
{
    //
    public function generarPDF(){
      $pdf =PDF::loadView('formato');
        
        return $pdf->stream("mi_archivo.pdf");       
    }
    
    public function index(){
        return view('formato');
    }
    
}
