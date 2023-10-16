<?php

namespace App\Http\Controllers;

use App\Models\ListMobil;
use App\Models\Riwayat;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function index()
    {
        $riwayats = Riwayat::all();
        $mobil = ListMobil::all();

        $pageTitle = 'Home';
        return view('home', compact('pageTitle', 'riwayats', 'mobil'));
    }
}
