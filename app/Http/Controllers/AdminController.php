<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Smalot\PdfParser\Parser;
class AdminController extends Controller
{
    //
    public function index()
    {
     
        $parser = new Parser();
        $pdf = $parser->parseFile(public_path('PAUL.pdf'));
        $text = $pdf->getText();
      

        echo $text;
     
    }
}
