<?php

namespace App\Http\Controllers;

use App\Models\ListMobil;
use App\Models\KondisiMobil;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
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
                'stnk' => 'required',
                'pajak' => 'required',
                'uji_keur' => 'required',
                'lain_lain' => 'required',
                'body_luar' => 'required',
                'air_radiator' => 'required',
                'air_accu' => 'required',
                'air_wipper' => 'required',
                'air_ac' => 'required',
                'oli_mesin' => 'required',
                'minyak_rem' => 'required',
                'oli_steering' => 'required',
                'lampu_utama' => 'required',
                'lampu_kota' => 'required',
                'fog_lamp' => 'required',
                'lampu_sein' => 'required',
                'lampu_belakang' => 'required',
                'lampu_atret' => 'required',
                'lampu_kabin' => 'required',
                'ban_terpasang' => 'required',
                'ban_serve' => 'required',
                'wipper_depan' => 'required',
                'wipper_belakang' => 'required',
                'suara_mesin' => 'required',
                'rem' => 'required',
                'kunci_roda' => 'required',
                'dongkrak' => 'required',
                'segitiga_pengaman' => 'required',
                'kebersihan' => 'required',
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

        $kondisi = new KondisiMobil();
        $kondisi->nopol = $request->nopol;
        $kondisi->stnk = $request->stnk;
        $kondisi->pajak = $request->pajak;
        $kondisi->uji_keur = $request->uji_keur;
        $kondisi->lain_lain = $request->lain_lain;
        $kondisi->body_luar = $request->body_luar;
        $kondisi->air_radiator = $request->air_radiator;
        $kondisi->air_accu = $request->stnk;
        $kondisi->air_wipper = $request->air_wipper;
        $kondisi->air_ac = $request->air_ac;
        $kondisi->oli_mesin = $request->oli_mesin;
        $kondisi->minyak_rem = $request->minyak_rem;
        $kondisi->oli_steering = $request->oli_steering;
        $kondisi->lampu_utama = $request->lampu_utama;
        $kondisi->lampu_kota = $request->lampu_kota;
        $kondisi->fog_lamp = $request->fog_lamp;
        $kondisi->lampu_sein = $request->lampu_sein;
        $kondisi->lampu_belakang = $request->lampu_belakang;
        $kondisi->lampu_atret = $request->lampu_atret;
        $kondisi->lampu_kabin = $request->lampu_kabin;
        $kondisi->ban_terpasang = $request->ban_terpasang;
        $kondisi->ban_serve = $request->ban_serve;
        $kondisi->wipper_depan = $request->wipper_depan;
        $kondisi->wipper_belakang = $request->wipper_belakang;
        $kondisi->suara_mesin = $request->suara_mesin;
        $kondisi->rem = $request->rem;
        $kondisi->kunci_roda = $request->kunci_roda;
        $kondisi->dongkrak = $request->dongkrak;
        $kondisi->segitiga_pengaman = $request->segitiga_pengaman;
        $kondisi->kebersihan = $request->kebersihan;
        $kondisi->keterangan = '-';
        $kondisi->save();

        Alert::success('Berhasil Diubah', 'Dokumen Berhasil Diubah');
        return redirect()->route('mobil.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pageTitle = 'Detail Kendaraan';
        $kondisi = KondisiMobil::findOrFail($id);
        $mobil = ListMobil::findOrFail($id);

        return view('arsip.show', compact('pageTitle', 'kondisi', 'mobil'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pageTitle = 'Edit Kendaraan';
        $kondisi = KondisiMobil::findOrFail($id);
        $mobil = ListMobil::findOrFail($id);

        return view('arsip.edit', compact('pageTitle', 'kondisi', 'mobil'));
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
                'nopol' => 'required',
                'merk' => 'required',
                'odo_meter' => 'required',
                'bensin' => 'required',
                'stnk' => 'required',
                'pajak' => 'required',
                'uji_keur' => 'required',
                'lain_lain' => 'required',
                'body_luar' => 'required',
                'air_radiator' => 'required',
                'air_accu' => 'required',
                'air_wipper' => 'required',
                'air_ac' => 'required',
                'oli_mesin' => 'required',
                'minyak_rem' => 'required',
                'oli_steering' => 'required',
                'lampu_utama' => 'required',
                'lampu_kota' => 'required',
                'fog_lamp' => 'required',
                'lampu_sein' => 'required',
                'lampu_belakang' => 'required',
                'lampu_atret' => 'required',
                'lampu_kabin' => 'required',
                'ban_terpasang' => 'required',
                'ban_serve' => 'required',
                'wipper_depan' => 'required',
                'wipper_belakang' => 'required',
                'suara_mesin' => 'required',
                'rem' => 'required',
                'kunci_roda' => 'required',
                'dongkrak' => 'required',
                'segitiga_pengaman' => 'required',
                'kebersihan' => 'required',
            ],
            $messages
        );

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $mobil = ListMobil::find($id);
        $mobil->nopol = $request->nopol;
        $mobil->merk = $request->merk;
        $mobil->odo_meter = $request->odo_meter;
        $mobil->fuel = $request->bensin;
        $mobil->admin = '-';
        $mobil->save();

        $kondisi = KondisiMobil::find($id);
        $kondisi->nopol = $request->nopol;
        $kondisi->stnk = $request->stnk;
        $kondisi->pajak = $request->pajak;
        $kondisi->uji_keur = $request->uji_keur;
        $kondisi->lain_lain = $request->lain_lain;
        $kondisi->body_luar = $request->body_luar;
        $kondisi->air_radiator = $request->air_radiator;
        $kondisi->air_accu = $request->stnk;
        $kondisi->air_wipper = $request->air_wipper;
        $kondisi->air_ac = $request->air_ac;
        $kondisi->oli_mesin = $request->oli_mesin;
        $kondisi->minyak_rem = $request->minyak_rem;
        $kondisi->oli_steering = $request->oli_steering;
        $kondisi->lampu_utama = $request->lampu_utama;
        $kondisi->lampu_kota = $request->lampu_kota;
        $kondisi->fog_lamp = $request->fog_lamp;
        $kondisi->lampu_sein = $request->lampu_sein;
        $kondisi->lampu_belakang = $request->lampu_belakang;
        $kondisi->lampu_atret = $request->lampu_atret;
        $kondisi->lampu_kabin = $request->lampu_kabin;
        $kondisi->ban_terpasang = $request->ban_terpasang;
        $kondisi->ban_serve = $request->ban_serve;
        $kondisi->wipper_depan = $request->wipper_depan;
        $kondisi->wipper_belakang = $request->wipper_belakang;
        $kondisi->suara_mesin = $request->suara_mesin;
        $kondisi->rem = $request->rem;
        $kondisi->kunci_roda = $request->kunci_roda;
        $kondisi->dongkrak = $request->dongkrak;
        $kondisi->segitiga_pengaman = $request->segitiga_pengaman;
        $kondisi->kebersihan = $request->kebersihan;
        $kondisi->keterangan = '-';
        $kondisi->save();

        Alert::success('Berhasil Diubah', 'Dokumen Berhasil Diubah');
        return redirect()->route('arsip.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}