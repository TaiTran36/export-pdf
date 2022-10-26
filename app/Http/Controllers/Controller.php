<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
    }

    public function showScreen() {
        return view('show');
    }

    public static function exportPDF() {
        $data = ['title' => 'Welcome'];
        $pdf = PDF::loadView('exportPDF', $data);
        return $pdf->stream();
//        return $pdf->download('pdf.pdf');
    }
}
