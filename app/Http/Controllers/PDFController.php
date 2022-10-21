<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Barryvdh\DomPDF\Facade\Pdf;
class PDFController extends Controller
{
    public function index()
    {
    $data = ['title' => 'Welcome to Laravel PDF Application'];
    $pdf = PDF::loadView('myTest', $data);
    return $pdf->download('test.pdf');
    }
}
