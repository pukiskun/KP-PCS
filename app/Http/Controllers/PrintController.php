<?php

namespace App\Http\Controllers;

use App\Models\Datas;
use Barryvdh\DomPDF\Facade\PDF;
use Illuminate\Http\Request;

class PrintController extends Controller
{
    public function download(string $id)
    {
        $pageTitle = 'download';

        // $data = Datas::findOrFail($id)->get();
        $pdf = PDF::loadView('layouts.print');

        return $pdf->stream();

    }
}
