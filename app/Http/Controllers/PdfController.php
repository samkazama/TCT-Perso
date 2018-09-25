<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employe;
use App\Conge;
use PDF;

class PdfController extends Controller
{
    public function attestationTravail(Employe $employe)
    {
      $pdf = PDF::loadView('pdf.attestation-travail',compact('employe'));
      return $pdf->download($employe->Nom .' - Attestation de travail.pdf');
    } 
}
