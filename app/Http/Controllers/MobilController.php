<?php

namespace App\Http\Controllers;

use App\Models\ListMobil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = 'Ruang Arsip';

        $items = ListMobil::all();

        return view('arsip.index', compact('pageTitle', 'items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'Create Data';
        return view('arsip.create', compact('pageTitle'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
        ];

        $validator = Validator::make(
            $request->all(),
            [
                'nopol' => 'required',
                'merk' => 'required',
                'odo_meter' => 'required',
                'bensin' => 'required',
            ],
            $messages
        );

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }
        $mobil = new ListMobil();
        $mobil->nopol = $request->input('nopol');
        $mobil->merk = $request->input('merk');
        $mobil->odo_meter = $request->input('odo_meter');
        $mobil->fuel = $request->input('bensin');
        $mobil->admin = '-';
        $mobil->save();

        return redirect()->route('mobil.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}