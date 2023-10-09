<?php

namespace App\Http\Controllers;

use App\Models\Datas;
use App\Models\Riwayat;
use App\Models\Divisions;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        $riwayats = Riwayat::all();
        $countBox = Datas::where('kode', 'LIKE', '%BOX%')->count('kode');
        $countMap = Datas::where('kode', 'LIKE', '%MAP%')->count('kode');
        $countDok = Datas::where('kode', 'LIKE', '%DOK%')->count('kode');
        $countDiv = Divisions::count('id');
        $pageTitle = 'Home';
        return view(
            'home',
            compact(
                'pageTitle',
                'countBox',
                'countMap',
                'countDok',
                'countDiv',
                'riwayats'
            )
        );
    }
}
