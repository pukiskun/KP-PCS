<?php

namespace App\Http\Controllers;

use App\Models\Datas;
use Barryvdh\DomPDF\Facade\PDF;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class PrintController extends Controller
{
    public function download(string $id)
    {
        $pageTitle = 'download';
        $items = Datas::where('datas.id', $id)
            ->join('kategoris', 'datas.kategoris_id', '=', 'kategoris.id')
            ->join('divisions', 'datas.divisions_id', '=', 'divisions.id')
            ->select(
                'datas.*',
                'kategoris.nama as kategori_nama',
                'divisions.nama as division_nama'
            )
            ->get();

        $data = Datas::findOrFail($id);
        $code = QrCode::format('svg')->size(400)->errorCorrection('H')->generate($data->kode);

        // $data = Datas::findOrFail($id)->get();
        $pdf = PDF::loadView('layouts.print', ['code' => $code, 'data' => $data, 'items' => $items]);

        return $pdf->stream();

    }
}