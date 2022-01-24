<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class ApresentacaoController extends Controller
{
    //
    public function pdf()
    {
        $dompdf = PDF::loadHTML('<h1>Wolflan</h1>');

        return $dompdf->stream();
    }
}
