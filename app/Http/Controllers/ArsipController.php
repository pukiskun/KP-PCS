<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArsipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = 'Ruang Arsip';

        return view('arsip.index', compact('pageTitle'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'Create Data';

        // $kategoris = Kategoris::all();
        // $divisions = Divisions::all();
        // $boxes = Datas::where('kode', 'LIKE', '%BOX%')->get();
        // $maps = Datas::where('kode', 'LIKE', '%MAP%')->get();

        return view('arsip.create', compact('pageTitle'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
