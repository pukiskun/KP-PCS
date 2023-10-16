<?php

namespace App\Http\Controllers;

use App\Models\ListMobil;
use App\Models\Riwayat;
use App\Models\RiwayatMobil;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        $riwayats = Riwayat::all();
        $riwayat_mobil = RiwayatMobil::all();

        $pageTitle = 'Home';
        return view(
            'home',
            compact(
                'pageTitle',
                'riwayats',
                'riwayat_mobil'
            )
        );
    }
}