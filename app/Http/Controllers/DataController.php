<?php

namespace App\Http\Controllers;

use App\Models\Datas;
use App\Models\Divisions;
use App\Models\Kategoris;
use App\Models\Tersimpan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    private function generateKode($kategori, $divisi)
    {
        $kategoriCode = strtoupper(substr($kategori, 0, 3));
        $divisiCode = strtoupper(substr($divisi, 0, 3));
        return $kategoriCode . '-' . $divisiCode;
    }

    public function index()
    {
        $pageTitle = 'Arsip List';

        $countBox = Datas::where('kode', 'LIKE', '%BOX%')->count('kode');
        $countMap = Datas::where('kode', 'LIKE', '%MAP%')->count('kode');
        $countDok = Datas::where('kode', 'LIKE', '%DOK%')->count('kode');
        $countDiv = Divisions::count('id');
        $divisions = Divisions::all();

        // ELOQUENT
        $items = Datas::join(
            'kategoris',
            'datas.kategoris_id',
            '=',
            'kategoris.id'
        )
            ->join('divisions', 'datas.divisions_id', '=', 'divisions.id')
            ->select(
                'datas.*',
                'kategoris.nama as kategori_nama',
                'divisions.nama as division_nama'
            )
            ->get();

        return view('data.index', [
            'pageTitle' => $pageTitle,
            'item' => $items,
            'countBox' => $countBox,
            'countMap' => $countMap,
            'countDok' => $countDok,
            'countDiv' => $countDiv,
            'divisions' => $divisions,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'Create Data';

        $kategoris = Kategoris::all();
        $divisions = Divisions::all();
        $boxes = Datas::where('kode', 'LIKE', '%BOX%')->get();
        $maps = Datas::where('kode', 'LIKE', '%MAP%')->get();

        return view(
            'data.create',
            compact('pageTitle', 'kategoris', 'divisions', 'boxes', 'maps')
        );
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
                'nama' => 'required',
                'nomorSurat' => 'required',
                'divisi' => 'required',
                'kategori' => 'required',
                'parent' => 'nullable',
            ],
            $messages
        );

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }
        $kategori = Kategoris::find($request->kategori);
        $divisi = Divisions::find($request->divisi);
        $kode = $this->generateKode($kategori->nama, $divisi->nama);

        $lastKode = Datas::where('divisions_id', $request->divisi)
            ->where('kategoris_id', $request->kategori)
            ->max('kode');

        $kodeNumber = 1;
        if ($lastKode) {
            $lastKodeParts = explode('-', $lastKode);
            $kodeNumber = (int) end($lastKodeParts) + 1;
        }

        // ELOQUENT
        $datas = new Datas();
        $datas->kode = $kode . '-' . $kodeNumber;
        $datas->nama = $request->nama;
        $datas->nomorSurat = $request->nomorSurat;
        $datas->divisions_id = $request->divisi;
        $datas->kategoris_id = $request->kategori;
        $datas->keterangan = $request->keterangan;
        $datas->save();

        // TERSIMPAN
        $tersimpan = new Tersimpan();
        $tersimpan->parent = $request->parent;
        $tersimpan->item = $kode . '-' . $kodeNumber;
        $tersimpan->save();

        Alert::success('Berhasil Ditambahkan', 'Dokumen Berhasil Ditambahkan');
        return redirect()->route('data.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pageTitle = 'Detail';
        $key = $id;

        $item = Datas::findOrFail($id);
        $kategoris = Kategoris::all();
        $divisions = Divisions::all();

        return view(
            'data.show',
            compact('pageTitle', 'item', 'kategoris', 'divisions', 'key')
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pageTitle = 'Edit';

        $kategoris = Kategoris::all();
        $divisions = Divisions::all();
        $item = Datas::findOrFail($id);

        return view(
            'data.edit',
            compact('pageTitle', 'item', 'kategoris', 'divisions')
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
        ];

        $validator = Validator::make(
            $request->all(),
            [
                'nama' => 'required',
                'nomorSurat' => 'required',
                'divisi' => 'required',
                'kategori' => 'required',
            ],
            $messages
        );

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $kategori = Kategoris::find($request->kategori);
        $divisi = Divisions::find($request->divisi);
        // Generate the kode value
        $kode = $this->generateKode($kategori->nama, $divisi->nama);

        // Find the last kode value from the database and increment it
        $lastKode = Datas::max('kode');
        $kodeNumber = 1;
        if ($lastKode) {
            $lastKodeParts = explode('-', $lastKode);
            $kodeNumber = (int) end($lastKodeParts) + 1;
        }

        // ELOQUENT
        $datas = Datas::find($id);
        $datas->kode = $kode . '-' . $kodeNumber;
        $datas->nama = $request->nama;
        $datas->nomorSurat = $request->nomorSurat;
        $datas->divisions_id = $request->divisi;
        $datas->kategoris_id = $request->kategori;
        $datas->keterangan = $request->keterangan;
        $datas->save();

        Alert::success('Berhasil Diubah', 'Dokumen Berhasil Diubah');
        return redirect()->route('data.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Datas::find($id)->delete();

        Alert::success('Berhasil Dihapus', 'Dokumen Berhasil Dihapus');
        return redirect()->route('data.index');
    }
}
