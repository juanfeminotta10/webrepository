<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use PDF;

class PdfController extends Controller
{
    public function imprimirestudiantes(Request $request)
 {
 $estudiantes=Estudiante::orderBy('id','ASC')->get();
 $pdf = PDF::loadView('pdf.estudiantesPDF',['estudiantes' => $estudiantes ]);
 $pdf->setPaper('ledger', 'A4');

 return $pdf->stream();
 } 
}
