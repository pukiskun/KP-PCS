@extends('layouts.app')

@section('content')
    <div class="container-sm mt-5">
        <form action="{{ route('mobil.update', ['id' => $kondisi->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="row justify-content-center">
                <div class="p-5 bg-light rounded-3 border col-xl-12">
                    <div class="mb-5 text-center">
                        <i class="bi bi-truck fs-1"></i>
                        <h4>Ceklist Pemeriksaan Kendaraan Operasional Pool</h4>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3 ">
                            <label for="nopol" class="form-label">Nopol</label>
                            <input class="form-control @error('nopol')
        is-invalid @enderror" type="text"
                                name="nopol" id="nopol" value="{{ $mobil->nopol }}"
                                placeholder="Masukkan Nomor Polisi">
                            @error('nopol')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3 ">
                            <label for="merk" class="form-label">Merk/Jenis Kendaraan</label>
                            <input class="form-control @error('merk')
        is-invalid @enderror" type="text"
                                name="merk" id="merk"
                                value="{{ $mobil->merk }}"placeholder="Masukkan Merk/Jenis Kendaraan">
                            @error('merk')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3 ">
                            <label for="odo_meter" class="form-label">Odometer</label>
                            <input class="form-control @error('odo_meter')
        is-invalid @enderror" type="text"
                                name="odo_meter" id="odo_meter" value="{{ $mobil->odo_meter }}"
                                placeholder="Masukkan Odometer">
                            @error('odo_meter')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3 ">
                            <label for="bensin" class="form-label">Bensin</label>
                            <input class="form-control @error('bensin')
        is-invalid @enderror" type="text"
                                name="bensin" id="bensin" value="{{ $mobil->fuel }}" placeholder="Masukkan Bensin">
                            @error('bensin')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <hr>
                        <h5>Surat-surat kendaraan</h5>
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <div class="row">
                                    <div class="col-md-2">
                                        <h6>STNK</h6>
                                        @error('stnk')
                                            <div class="text-danger"><small>{{ $message }}</small></div>
                                        @enderror
                                    </div>

                                    <div class="col-md-1">
                                        <h6>:</h6>
                                    </div>
                                    <div class="col-md-9">

                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="stnk" value="BAIK"
                                                @if ($kondisi->stnk == 'BAIK') checked @endif> Baik
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="stnk" value="CUKUP"
                                                @if ($kondisi->stnk == 'CUKUP') checked @endif> Cukup
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="stnk" value="RUSAK"
                                                @if ($kondisi->stnk == 'RUSAK') checked @endif> Rusak
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="stnk" value="KURANG"
                                                @if ($kondisi->stnk == 'KURANG') checked @endif> Kurang
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="stnk" value="TIDAK ADA"
                                                @if ($kondisi->stnk == 'TIDAK ADA') checked @endif> Tidak Ada/Ada
                                        </label>

                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <h6>Pajak</h6>
                                        @error('pajak')
                                            <div class="text-danger"><small>{{ $message }}</small></div>
                                        @enderror
                                    </div>
                                    <div class="col-md-1">
                                        <h6>:</h6>
                                    </div>
                                    <div class="col-md-9">
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="pajak" value="BAIK"
                                                @if ($kondisi->pajak == 'BAIK') checked @endif> Baik
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="pajak" value="CUKUP">
                                            @if ($kondisi->pajak == 'CUKUP')
                                                checked
                                            @endif Cukup
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="pajak" value="RUSAK">
                                            @if ($kondisi->pajak == 'RUSAK')
                                                checked
                                            @endif Rusak
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="pajak" value="KURANG"
                                                @if ($kondisi->pajak == 'KURANG') checked @endif> Kurang
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="pajak" value="TIDAK ADA">
                                            @if ($kondisi->pajak == 'TIDAK ADA')
                                                checked
                                            @endif Tidak Ada/Ada
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <h6>Uji Keur</h6>
                                        @error('uji_keur')
                                            <div class="text-danger"><small>{{ $message }}</small></div>
                                        @enderror
                                    </div>
                                    <div class="col-md-1">
                                        <h6>:</h6>
                                    </div>
                                    <div class="col-md-9">
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="uji_keur" value="BAIK"
                                                @if ($kondisi->uji_keur == 'BAIK') checked @endif> Baik
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="uji_keur" value="CUKUP">
                                            @if ($kondisi->uji_keur == 'CUKUP')
                                                checked
                                            @endif Cukup
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="uji_keur" value="RUSAK">
                                            @if ($kondisi->uji_keur == 'RUSAK')
                                                checked
                                            @endif Rusak
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="uji_keur" value="KURANG"
                                                @if ($kondisi->uji_keur == 'KURANG') checked @endif> Kurang
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="uji_keur" value="TIDAK ADA">
                                            @if ($kondisi->uji_keur == 'TIDAK ADA')
                                                checked
                                            @endif Tidak Ada/Ada
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <h6>Lain-lain</h6>
                                        @error('lain_lain')
                                            <div class="text-danger"><small>{{ $message }}</small></div>
                                        @enderror
                                    </div>
                                    <div class="col-md-1">
                                        <h6>:</h6>
                                    </div>
                                    <div class="col-md-9">
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="lain_lain" value="BAIK"
                                                @if ($kondisi->lain_lain == 'BAIK') checked @endif> Baik
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="lain_lain" value="CUKUP">
                                            @if ($kondisi->lain_lain == 'CUKUP')
                                                checked
                                            @endif Cukup
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="lain_lain" value="RUSAK">
                                            @if ($kondisi->lain_lain == 'RUSAK')
                                                checked
                                            @endif Rusak
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="lain_lain" value="KURANG"
                                                @if ($kondisi->lain_lain == 'KURANG') checked @endif> Kurang
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="lain_lain" value="TIDAK ADA">
                                            @if ($kondisi->lain_lain == 'TIDAK ADA')
                                                checked
                                            @endif Tidak Ada/Ada
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-2">
                                <h6>Body Bagian Luar</h6>
                                @error('body_luar')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>
                            <div class="col-md-1">
                                <h6>:</h6>
                            </div>
                            <div class="col-md-9">
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="body_luar" value="BAIK"
                                        @if ($kondisi->body_luar == 'BAIK') checked @endif> Baik
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="body_luar" value="CUKUP">
                                    @if ($kondisi->body_luar == 'CUKUP')
                                        checked
                                    @endif Cukup
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="body_luar" value="RUSAK">
                                    @if ($kondisi->body_luar == 'RUSAK')
                                        checked
                                    @endif Rusak
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="body_luar" value="KURANG"
                                        @if ($kondisi->body_luar == 'KURANG') checked @endif> Kurang
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="body_luar" value="TIDAK ADA">
                                    @if ($kondisi->body_luar == 'TIDAK ADA')
                                        checked
                                    @endif Tidak Ada/Ada
                                </label>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-2">
                                <h6>Air Radiator</h6>
                                @error('air_radiator')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>
                            <div class="col-md-1">
                                <h6>:</h6>
                            </div>
                            <div class="col-md-9">
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="air_radiator" value="BAIK"
                                        @if ($kondisi->air_radiator == 'BAIK') checked @endif> Baik
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="air_radiator" value="CUKUP">
                                    @if ($kondisi->air_radiator == 'CUKUP')
                                        checked
                                    @endif Cukup
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="air_radiator" value="RUSAK">
                                    @if ($kondisi->air_radiator == 'RUSAK')
                                        checked
                                    @endif Rusak
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="air_radiator" value="KURANG"
                                        @if ($kondisi->air_radiator == 'KURANG') checked @endif> Kurang
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="air_radiator" value="TIDAK ADA">
                                    @if ($kondisi->air_radiator == 'TIDAK ADA')
                                        checked
                                    @endif Tidak Ada/Ada
                                </label>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-2">
                                <h6>Air ACCU</h6>
                                @error('air_accu')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>
                            <div class="col-md-1">
                                <h6>:</h6>
                            </div>
                            <div class="col-md-9">
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="air_accu" value="BAIK"
                                        @if ($kondisi->air_accu == 'BAIK') checked @endif> Baik
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="air_accu" value="CUKUP">
                                    @if ($kondisi->air_accu == 'CUKUP')
                                        checked
                                    @endif Cukup
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="air_accu" value="RUSAK">
                                    @if ($kondisi->air_accu == 'RUSAK')
                                        checked
                                    @endif Rusak
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="air_accu" value="KURANG"
                                        @if ($kondisi->air_accu == 'KURANG') checked @endif> Kurang
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="air_accu" value="TIDAK ADA">
                                    @if ($kondisi->air_accu == 'TIDAK ADA')
                                        checked
                                    @endif Tidak Ada/Ada
                                </label>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-2">
                                <h6>Air Wipper</h6>
                                @error('air_wipper')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>
                            <div class="col-md-1">
                                <h6>:</h6>
                            </div>
                            <div class="col-md-9">
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="air_wipper" value="BAIK"
                                        @if ($kondisi->air_wipper == 'BAIK') checked @endif> Baik
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="air_wipper" value="CUKUP">
                                    @if ($kondisi->air_wipper == 'CUKUP')
                                        checked
                                    @endif Cukup
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="air_wipper" value="RUSAK">
                                    @if ($kondisi->air_wipper == 'RUSAK')
                                        checked
                                    @endif Rusak
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="air_wipper" value="KURANG"
                                        @if ($kondisi->air_wipper == 'KURANG') checked @endif> Kurang
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="air_wipper" value="TIDAK ADA">
                                    @if ($kondisi->air_wipper == 'TIDAK ADA')
                                        checked
                                    @endif Tidak Ada/Ada
                                </label>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-2">
                                <h6>Air Conditioner (AC)</h6>
                                @error('air_ac')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>
                            <div class="col-md-1">
                                <h6>:</h6>
                            </div>
                            <div class="col-md-9">
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="air_ac" value="BAIK"
                                        @if ($kondisi->air_ac == 'BAIK') checked @endif> Baik
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="air_ac" value="CUKUP">
                                    @if ($kondisi->air_ac == 'CUKUP')
                                        checked
                                    @endif Cukup
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="air_ac" value="RUSAK">
                                    @if ($kondisi->air_ac == 'RUSAK')
                                        checked
                                    @endif Rusak
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="air_ac" value="KURANG"
                                        @if ($kondisi->air_ac == 'KURANG') checked @endif> Kurang
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="air_ac" value="TIDAK ADA">
                                    @if ($kondisi->air_ac == 'TIDAK ADA')
                                        checked
                                    @endif Tidak Ada/Ada
                                </label>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-2">
                                <h6>Oli Mesin</h6>
                                @error('oli_mesin')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>
                            <div class="col-md-1">
                                <h6>:</h6>
                            </div>
                            <div class="col-md-9">
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="oli_mesin" value="BAIK"
                                        @if ($kondisi->oli_mesin == 'BAIK') checked @endif> Baik
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="oli_mesin" value="CUKUP">
                                    @if ($kondisi->oli_mesin == 'CUKUP')
                                        checked
                                    @endif Cukup
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="oli_mesin" value="RUSAK">
                                    @if ($kondisi->oli_mesin == 'RUSAK')
                                        checked
                                    @endif Rusak
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="oli_mesin" value="KURANG"
                                        @if ($kondisi->oli_mesin == 'KURANG') checked @endif> Kurang
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="oli_mesin" value="TIDAK ADA">
                                    @if ($kondisi->oli_mesin == 'TIDAK ADA')
                                        checked
                                    @endif Tidak Ada/Ada
                                </label>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-2">
                                <h6>Minyak Rem</h6>
                                @error('minyak_rem')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>
                            <div class="col-md-1">
                                <h6>:</h6>
                            </div>
                            <div class="col-md-9">
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="minyak_rem" value="BAIK"
                                        @if ($kondisi->minyak_rem == 'BAIK') checked @endif> Baik
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="minyak_rem" value="CUKUP">
                                    @if ($kondisi->minyak_rem == 'CUKUP')
                                        checked
                                    @endif Cukup
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="minyak_rem" value="RUSAK">
                                    @if ($kondisi->minyak_rem == 'RUSAK')
                                        checked
                                    @endif Rusak
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="minyak_rem" value="KURANG"
                                        @if ($kondisi->minyak_rem == 'KURANG') checked @endif> Kurang
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="minyak_rem" value="TIDAK ADA">
                                    @if ($kondisi->minyak_rem == 'TIDAK ADA')
                                        checked
                                    @endif Tidak Ada/Ada
                                </label>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-2">
                                <h6>Oli Power Steering</h6>
                                @error('oli_steering')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>
                            <div class="col-md-1">
                                <h6>:</h6>
                            </div>
                            <div class="col-md-9">
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="oli_steering" value="BAIK"
                                        @if ($kondisi->oli_steering == 'BAIK') checked @endif> Baik
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="oli_steering" value="CUKUP">
                                    @if ($kondisi->oli_steering == 'CUKUP')
                                        checked
                                    @endif Cukup
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="oli_steering" value="RUSAK">
                                    @if ($kondisi->oli_steering == 'RUSAK')
                                        checked
                                    @endif Rusak
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="oli_steering" value="KURANG"
                                        @if ($kondisi->oli_steering == 'KURANG') checked @endif> Kurang
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="oli_steering" value="TIDAK ADA">
                                    @if ($kondisi->oli_steering == 'TIDAK ADA')
                                        checked
                                    @endif Tidak Ada/Ada
                                </label>
                            </div>
                        </div>
                        <hr>
                        <h5>Lampu-lampu</h5>

                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <div class="row">
                                    <div class="col-md-2">
                                        <h6>Lampu Utama</h6>
                                        @error('lampu_utama')
                                            <div class="text-danger"><small>{{ $message }}</small></div>
                                        @enderror
                                    </div>
                                    <div class="col-md-1">
                                        <h6>:</h6>
                                    </div>
                                    <div class="col-md-9">
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="lampu_utama" value="BAIK"
                                                @if ($kondisi->lampu_utama == 'BAIK') checked @endif> Baik
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="lampu_utama" value="CUKUP">
                                            @if ($kondisi->lampu_utama == 'CUKUP')
                                                checked
                                            @endif Cukup
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="lampu_utama" value="RUSAK">
                                            @if ($kondisi->lampu_utama == 'RUSAK')
                                                checked
                                            @endif Rusak
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="lampu_utama" value="KURANG"
                                                @if ($kondisi->lampu_utama == 'KURANG') checked @endif> Kurang
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="lampu_utama" value="TIDAK ADA">
                                            @if ($kondisi->lampu_utama == 'TIDAK ADA')
                                                checked
                                            @endif Tidak Ada/Ada
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <h6>Lampu Kota</h6>
                                        @error('lampu_kota')
                                            <div class="text-danger"><small>{{ $message }}</small></div>
                                        @enderror
                                    </div>
                                    <div class="col-md-1">
                                        <h6>:</h6>
                                    </div>
                                    <div class="col-md-9">
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="lampu_kota" value="BAIK"
                                                @if ($kondisi->lampu_kota == 'BAIK') checked @endif> Baik
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="lampu_kota" value="CUKUP">
                                            @if ($kondisi->lampu_kota == 'CUKUP')
                                                checked
                                            @endif Cukup
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="lampu_kota" value="RUSAK">
                                            @if ($kondisi->lampu_kota == 'RUSAK')
                                                checked
                                            @endif Rusak
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="lampu_kota" value="KURANG"
                                                @if ($kondisi->lampu_kota == 'KURANG') checked @endif> Kurang
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="lampu_kota" value="TIDAK ADA">
                                            @if ($kondisi->lampu_kota == 'TIDAK ADA')
                                                checked
                                            @endif Tidak Ada/Ada
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <h6>Fog Lamp</h6>
                                        @error('fog_lamp')
                                            <div class="text-danger"><small>{{ $message }}</small></div>
                                        @enderror
                                    </div>
                                    <div class="col-md-1">
                                        <h6>:</h6>
                                    </div>
                                    <div class="col-md-9">
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="fog_lamp" value="BAIK"
                                                @if ($kondisi->fog_lamp == 'BAIK') checked @endif> Baik
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="fog_lamp" value="CUKUP">
                                            @if ($kondisi->fog_lamp == 'CUKUP')
                                                checked
                                            @endif Cukup
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="fog_lamp" value="RUSAK">
                                            @if ($kondisi->fog_lamp == 'RUSAK')
                                                checked
                                            @endif Rusak
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="fog_lamp" value="KURANG"
                                                @if ($kondisi->fog_lamp == 'KURANG') checked @endif> Kurang
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="fog_lamp" value="TIDAK ADA">
                                            @if ($kondisi->fog_lamp == 'TIDAK ADA')
                                                checked
                                            @endif Tidak Ada/Ada
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <h6>Lampu Sein</h6>
                                        @error('lampu_sein')
                                            <div class="text-danger"><small>{{ $message }}</small></div>
                                        @enderror
                                    </div>
                                    <div class="col-md-1">
                                        <h6>:</h6>
                                    </div>
                                    <div class="col-md-9">
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="lampu_sein" value="BAIK"
                                                @if ($kondisi->lampu_sein == 'BAIK') checked @endif> Baik
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="lampu_sein" value="CUKUP">
                                            @if ($kondisi->lampu_sein == 'CUKUP')
                                                checked
                                            @endif Cukup
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="lampu_sein" value="RUSAK">
                                            @if ($kondisi->lampu_sein == 'RUSAK')
                                                checked
                                            @endif Rusak
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="lampu_sein" value="KURANG"
                                                @if ($kondisi->lampu_sein == 'KURANG') checked @endif> Kurang
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="lampu_sein" value="TIDAK ADA">
                                            @if ($kondisi->lampu_sein == 'TIDAK ADA')
                                                checked
                                            @endif Tidak Ada/Ada
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <h6>Lampu Belakang</h6>
                                        @error('lampu_belakang')
                                            <div class="text-danger"><small>{{ $message }}</small></div>
                                        @enderror
                                    </div>
                                    <div class="col-md-1">
                                        <h6>:</h6>
                                    </div>
                                    <div class="col-md-9">
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="lampu_belakang" value="BAIK"
                                                @if ($kondisi->lampu_belakang == 'BAIK') checked @endif> Baik
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="lampu_belakang" value="CUKUP">
                                            @if ($kondisi->lampu_belakang == 'CUKUP')
                                                checked
                                            @endif Cukup
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="lampu_belakang" value="RUSAK">
                                            @if ($kondisi->lampu_belakang == 'RUSAK')
                                                checked
                                            @endif Rusak
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="lampu_belakang" value="KURANG"
                                                @if ($kondisi->lampu_belakang == 'KURANG') checked @endif> Kurang
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="lampu_belakang" value="TIDAK ADA">
                                            @if ($kondisi->lampu_belakang == 'TIDAK ADA')
                                                checked
                                            @endif Tidak Ada/Ada
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <h6>Lampu Atret</h6>
                                        @error('lampu_atret')
                                            <div class="text-danger"><small>{{ $message }}</small></div>
                                        @enderror
                                    </div>
                                    <div class="col-md-1">
                                        <h6>:</h6>
                                    </div>
                                    <div class="col-md-9">
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="lampu_atret" value="BAIK"
                                                @if ($kondisi->lampu_atret == 'BAIK') checked @endif> Baik
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="lampu_atret" value="CUKUP">
                                            @if ($kondisi->lampu_atret == 'CUKUP')
                                                checked
                                            @endif Cukup
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="lampu_atret" value="RUSAK">
                                            @if ($kondisi->lampu_atret == 'RUSAK')
                                                checked
                                            @endif Rusak
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="lampu_atret" value="KURANG"
                                                @if ($kondisi->lampu_atret == 'KURANG') checked @endif> Kurang
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="lampu_atret" value="TIDAK ADA">
                                            @if ($kondisi->lampu_atret == 'TIDAK ADA')
                                                checked
                                            @endif Tidak Ada/Ada
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <h6>Lampu Dalam Kabin</h6>
                                        @error('lampu_kabin')
                                            <div class="text-danger"><small>{{ $message }}</small></div>
                                        @enderror
                                    </div>
                                    <div class="col-md-1">
                                        <h6>:</h6>
                                    </div>
                                    <div class="col-md-9">
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="lampu_kabin" value="BAIK"
                                                @if ($kondisi->lampu_kabin == 'BAIK') checked @endif> Baik
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="lampu_kabin" value="CUKUP">
                                            @if ($kondisi->lampu_kabin == 'CUKUP')
                                                checked
                                            @endif Cukup
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="lampu_kabin" value="RUSAK">
                                            @if ($kondisi->lampu_kabin == 'RUSAK')
                                                checked
                                            @endif Rusak
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="lampu_kabin" value="KURANG"
                                                @if ($kondisi->lampu_kabin == 'KURANG') checked @endif> Kurang
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="lampu_kabin" value="TIDAK ADA">
                                            @if ($kondisi->lampu_kabin == 'TIDAK ADA')
                                                checked
                                            @endif Tidak Ada/Ada
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h5>Tekanan Angin</h5>
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <div class="row">
                                    <div class="col-md-2">
                                        <h6>Ban Terpasang (4 roda)</h6>
                                        @error('ban_terpasang')
                                            <div class="text-danger"><small>{{ $message }}</small></div>
                                        @enderror
                                    </div>
                                    <div class="col-md-1">
                                        <h6>:</h6>
                                    </div>
                                    <div class="col-md-9">
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="ban_terpasang" value="BAIK"
                                                @if ($kondisi->ban_terpasang == 'BAIK') checked @endif> Baik
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="ban_terpasang" value="CUKUP">
                                            @if ($kondisi->ban_terpasang == 'CUKUP')
                                                checked
                                            @endif Cukup
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="ban_terpasang" value="RUSAK">
                                            @if ($kondisi->ban_terpasang == 'RUSAK')
                                                checked
                                            @endif Rusak
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="ban_terpasang" value="KURANG"
                                                @if ($kondisi->ban_terpasang == 'KURANG') checked @endif> Kurang
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="ban_terpasang" value="TIDAK ADA">
                                            @if ($kondisi->ban_terpasang == 'TIDAK ADA')
                                                checked
                                            @endif Tidak Ada/Ada
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <h6>Ban Serve</h6>
                                        @error('ban_serve')
                                            <div class="text-danger"><small>{{ $message }}</small></div>
                                        @enderror
                                    </div>
                                    <div class="col-md-1">
                                        <h6>:</h6>
                                    </div>
                                    <div class="col-md-9">
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="ban_serve" value="BAIK"
                                                @if ($kondisi->ban_serve == 'BAIK') checked @endif> Baik
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="ban_serve" value="CUKUP">
                                            @if ($kondisi->ban_serve == 'CUKUP')
                                                checked
                                            @endif Cukup
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="ban_serve" value="RUSAK">
                                            @if ($kondisi->ban_serve == 'RUSAK')
                                                checked
                                            @endif Rusak
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="ban_serve" value="KURANG"
                                                @if ($kondisi->ban_serve == 'KURANG') checked @endif> Kurang
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="ban_serve" value="TIDAK ADA">
                                            @if ($kondisi->ban_serve == 'TIDAK ADA')
                                                checked
                                            @endif Tidak Ada/Ada
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h5>Wipper</h5>
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <div class="row">
                                    <div class="col-md-2">
                                        <h6>Depan</h6>
                                        @error('wipper_depan')
                                            <div class="text-danger"><small>{{ $message }}</small></div>
                                        @enderror
                                    </div>
                                    <div class="col-md-1">
                                        <h6>:</h6>
                                    </div>
                                    <div class="col-md-9">
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="wipper_depan" value="BAIK"
                                                @if ($kondisi->wipper_depan == 'BAIK') checked @endif> Baik
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="wipper_depan" value="CUKUP">
                                            @if ($kondisi->wipper_depan == 'CUKUP')
                                                checked
                                            @endif Cukup
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="wipper_depan" value="RUSAK">
                                            @if ($kondisi->wipper_depan == 'RUSAK')
                                                checked
                                            @endif Rusak
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="wipper_depan" value="KURANG"
                                                @if ($kondisi->wipper_depan == 'KURANG') checked @endif> Kurang
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="wipper_depan" value="TIDAK ADA">
                                            @if ($kondisi->wipper_depan == 'TIDAK ADA')
                                                checked
                                            @endif Tidak Ada/Ada
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <h6>Belakang</h6>
                                        @error('wipper_belakang')
                                            <div class="text-danger"><small>{{ $message }}</small></div>
                                        @enderror
                                    </div>
                                    <div class="col-md-1">
                                        <h6>:</h6>
                                    </div>
                                    <div class="col-md-9">
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="wipper_belakang" value="BAIK"
                                                @if ($kondisi->wipper_belakang == 'BAIK') checked @endif> Baik
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="wipper_belakang" value="CUKUP">
                                            @if ($kondisi->wipper_belakang == 'CUKUP')
                                                checked
                                            @endif Cukup
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="wipper_belakang" value="RUSAK">
                                            @if ($kondisi->wipper_belakang == 'RUSAK')
                                                checked
                                            @endif Rusak
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="wipper_belakang" value="KURANG"
                                                @if ($kondisi->wipper_belakang == 'KURANG') checked @endif> Kurang
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="wipper_belakang" value="TIDAK ADA">
                                            @if ($kondisi->wipper_belakang == 'TIDAK ADA')
                                                checked
                                            @endif Tidak Ada/Ada
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-2">
                                <h6>Suara Mesin</h6>
                                @error('suara_mesin')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>
                            <div class="col-md-1">
                                <h6>:</h6>
                            </div>
                            <div class="col-md-9">
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="suara_mesin" value="BAIK"
                                        @if ($kondisi->suara_mesin == 'BAIK') checked @endif> Baik
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="suara_mesin" value="CUKUP">
                                    @if ($kondisi->suara_mesin == 'CUKUP')
                                        checked
                                    @endif Cukup
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="suara_mesin" value="RUSAK">
                                    @if ($kondisi->suara_mesin == 'RUSAK')
                                        checked
                                    @endif Rusak
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="suara_mesin" value="KURANG"
                                        @if ($kondisi->suara_mesin == 'KURANG') checked @endif> Kurang
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="suara_mesin" value="TIDAK ADA">
                                    @if ($kondisi->suara_mesin == 'TIDAK ADA')
                                        checked
                                    @endif Tidak Ada/Ada
                                </label>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-2">
                                <h6>Rem & Hand rem</h6>
                                @error('rem')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>
                            <div class="col-md-1">
                                <h6>:</h6>
                            </div>
                            <div class="col-md-9">
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="rem" value="BAIK"
                                        @if ($kondisi->rem == 'BAIK') checked @endif> Baik
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="rem" value="CUKUP">
                                    @if ($kondisi->rem == 'CUKUP')
                                        checked
                                    @endif Cukup
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="rem" value="RUSAK">
                                    @if ($kondisi->rem == 'RUSAK')
                                        checked
                                    @endif Rusak
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="rem" value="KURANG"
                                        @if ($kondisi->rem == 'KURANG') checked @endif> Kurang
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="rem" value="TIDAK ADA">
                                    @if ($kondisi->rem == 'TIDAK ADA')
                                        checked
                                    @endif Tidak Ada/Ada
                                </label>
                            </div>
                        </div>
                        <hr>
                        <h5>Tools Set</h5>
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <div class="row">
                                    <div class="col-md-2">
                                        <h6>Kunci Roda</h6>
                                        @error('kunci_roda')
                                            <div class="text-danger"><small>{{ $message }}</small></div>
                                        @enderror
                                    </div>
                                    <div class="col-md-1">
                                        <h6>:</h6>
                                    </div>
                                    <div class="col-md-9">
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="kunci_roda" value="BAIK"
                                                @if ($kondisi->kunci_roda == 'BAIK') checked @endif> Baik
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="kunci_roda" value="CUKUP">
                                            @if ($kondisi->kunci_roda == 'CUKUP')
                                                checked
                                            @endif Cukup
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="kunci_roda" value="RUSAK">
                                            @if ($kondisi->kunci_roda == 'RUSAK')
                                                checked
                                            @endif Rusak
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="kunci_roda" value="KURANG"
                                                @if ($kondisi->kunci_roda == 'KURANG') checked @endif> Kurang
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="kunci_roda" value="TIDAK ADA">
                                            @if ($kondisi->kunci_roda == 'TIDAK ADA')
                                                checked
                                            @endif Tidak Ada/Ada
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <h6>Dongkrak</h6>
                                        @error('dongkrak')
                                            <div class="text-danger"><small>{{ $message }}</small></div>
                                        @enderror
                                    </div>
                                    <div class="col-md-1">
                                        <h6>:</h6>
                                    </div>
                                    <div class="col-md-9">
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="dongkrak" value="BAIK"
                                                @if ($kondisi->dongkrak == 'BAIK') checked @endif> Baik
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="dongkrak" value="CUKUP">
                                            @if ($kondisi->dongkrak == 'CUKUP')
                                                checked
                                            @endif Cukup
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="dongkrak" value="RUSAK">
                                            @if ($kondisi->dongkrak == 'RUSAK')
                                                checked
                                            @endif Rusak
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="dongkrak" value="KURANG"
                                                @if ($kondisi->dongkrak == 'KURANG') checked @endif> Kurang
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="dongkrak" value="TIDAK ADA">
                                            @if ($kondisi->dongkrak == 'TIDAK ADA')
                                                checked
                                            @endif Tidak Ada/Ada
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <h6>Segitiga Pengaman</h6>
                                        @error('segitiga_pengaman')
                                            <div class="text-danger"><small>{{ $message }}</small></div>
                                        @enderror
                                    </div>
                                    <div class="col-md-1">
                                        <h6>:</h6>
                                    </div>
                                    <div class="col-md-9">
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="segitiga_pengaman" value="BAIK"
                                                @if ($kondisi->segitiga_pengaman == 'BAIK') checked @endif> Baik
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="segitiga_pengaman" value="CUKUP">
                                            @if ($kondisi->segitiga_pengaman == 'CUKUP')
                                                checked
                                            @endif Cukup
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="segitiga_pengaman" value="RUSAK">
                                            @if ($kondisi->segitiga_pengaman == 'RUSAK')
                                                checked
                                            @endif Rusak
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="segitiga_pengaman" value="KURANG"
                                                @if ($kondisi->segitiga_pengaman == 'KURANG') checked @endif> Kurang
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="segitiga_pengaman" value="TIDAK ADA">
                                            @if ($kondisi->segitiga_pengaman == 'TIDAK ADA')
                                                checked
                                            @endif Tidak
                                            Ada/Ada
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <h6>Kebersihan</h6>
                                        @error('kebersihan')
                                            <div class="text-danger"><small>{{ $message }}</small></div>
                                        @enderror
                                    </div>
                                    <div class="col-md-1">
                                        <h6>:</h6>
                                    </div>
                                    <div class="col-md-9">
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="kebersihan" value="BAIK"
                                                @if ($kondisi->kebersihan == 'BAIK') checked @endif> Baik
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="kebersihan" value="CUKUP">
                                            @if ($kondisi->kebersihan == 'CUKUP')
                                                checked
                                            @endif Cukup
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="kebersihan" value="RUSAK">
                                            @if ($kondisi->kebersihan == 'RUSAK')
                                                checked
                                            @endif Rusak
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="kebersihan" value="KURANG"
                                                @if ($kondisi->kebersihan == 'KURANG') checked @endif> Kurang
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="kebersihan" value="TIDAK ADA">
                                            @if ($kondisi->kebersihan == 'TIDAK ADA')
                                                checked
                                            @endif Tidak Ada/Ada
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-md-6 d-grid">
                                <a href="{{ url('arsip') }}" class="btn btn-outline-dark btn-lg mt-3"><i
                                        class="bi-arrow-left-circle me-2"></i>Cancel</a>
                            </div>
                            <div class="col-md-6 d-grid">
                                <button type="submit" class="btn btn-dark btn-lg
                mt-3"><i
                                        class="bi-check-circle me-2"></i>
                                    Save</button>
                            </div>
                        </div>
                    </div>
        </form>
    </div>
@endsection
