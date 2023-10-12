@extends('layouts.app')

@section('content')
    <div class="container-sm mt-5">
        <form action="{{ route('mobil.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
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
                                name="nopol" id="nopol" value="{{ old('nopol') }}"
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
                                value="{{ old('merk') }}"placeholder="Masukkan Merk/Jenis Kendaraan">
                            @error('merk')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3 ">
                            <label for="odo_meter" class="form-label">Odometer</label>
                            <input class="form-control @error('odo_meter')
        is-invalid @enderror" type="text"
                                name="odo_meter" id="odo_meter" value="{{ old('odo_meter') }}"
                                placeholder="Masukkan Odometer">
                            @error('odo_meter')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3 ">
                            <label for="bensin" class="form-label">Bensin</label>
                            <input class="form-control @error('bensin')
        is-invalid @enderror" type="text"
                                name="bensin" id="bensin" value="{{ old('bensin') }}" placeholder="Masukkan Bensin">
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
                                                @if (old('stnk') == 'BAIK') checked @endif> Baik
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="stnk" value="CUKUP"
                                                @if (old('stnk') == 'CUKUP') checked @endif> Cukup
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="stnk" value="RUSAK"
                                                @if (old('stnk') == 'RUSAK') checked @endif> Rusak
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="stnk" value="KURANG"
                                                @if (old('stnk') == 'KURANG') checked @endif> Kurang
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="stnk" value="TIDAK ADA"
                                                @if (old('stnk') == 'TIDAK ADA') checked @endif> Tidak Ada/Ada
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
                                                @if (old('stnk') == 'BAIK') checked @endif> Baik
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="pajak" value="CUKUP">
                                            @if (old('stnk') == 'CUKUP')
                                                checked
                                            @endif Cukup
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="pajak" value="RUSAK">
                                            @if (old('stnk') == 'RUSAK')
                                                checked
                                            @endif Rusak
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="pajak" value="KURANG"
                                                @if (old('stnk') == 'KURANG') checked @endif> Kurang
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="pajak" value="TIDAK ADA">
                                            @if (old('stnk') == 'TIDAK ADA')
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
                                                @if (old('stnk') == 'BAIK') checked @endif> Baik
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="uji_keur" value="CUKUP">
                                            @if (old('stnk') == 'CUKUP')
                                                checked
                                            @endif Cukup
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="uji_keur" value="RUSAK">
                                            @if (old('stnk') == 'RUSAK')
                                                checked
                                            @endif Rusak
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="uji_keur" value="KURANG"
                                                @if (old('stnk') == 'KURANG') checked @endif> Kurang
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="uji_keur" value="TIDAK ADA">
                                            @if (old('stnk') == 'TIDAK ADA')
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
                                                @if (old('stnk') == 'BAIK') checked @endif> Baik
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="lain_lain" value="CUKUP">
                                            @if (old('stnk') == 'CUKUP')
                                                checked
                                            @endif Cukup
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="lain_lain" value="RUSAK">
                                            @if (old('stnk') == 'RUSAK')
                                                checked
                                            @endif Rusak
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="lain_lain" value="KURANG"
                                                @if (old('stnk') == 'KURANG') checked @endif> Kurang
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="lain_lain" value="TIDAK ADA">
                                            @if (old('stnk') == 'TIDAK ADA')
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
                                        @if (old('stnk') == 'BAIK') checked @endif> Baik
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="body_luar" value="CUKUP">
                                    @if (old('stnk') == 'CUKUP')
                                        checked
                                    @endif Cukup
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="body_luar" value="RUSAK">
                                    @if (old('stnk') == 'RUSAK')
                                        checked
                                    @endif Rusak
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="body_luar" value="KURANG"
                                        @if (old('stnk') == 'KURANG') checked @endif> Kurang
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="body_luar" value="TIDAK ADA">
                                    @if (old('stnk') == 'TIDAK ADA')
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
                                        @if (old('stnk') == 'BAIK') checked @endif> Baik
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="air_radiator" value="CUKUP">
                                    @if (old('stnk') == 'CUKUP')
                                        checked
                                    @endif Cukup
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="air_radiator" value="RUSAK">
                                    @if (old('stnk') == 'RUSAK')
                                        checked
                                    @endif Rusak
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="air_radiator" value="KURANG"
                                        @if (old('stnk') == 'KURANG') checked @endif> Kurang
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="air_radiator" value="TIDAK ADA">
                                    @if (old('stnk') == 'TIDAK ADA')
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
                                        @if (old('stnk') == 'BAIK') checked @endif> Baik
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="air_accu" value="CUKUP">
                                    @if (old('stnk') == 'CUKUP')
                                        checked
                                    @endif Cukup
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="air_accu" value="RUSAK">
                                    @if (old('stnk') == 'RUSAK')
                                        checked
                                    @endif Rusak
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="air_accu" value="KURANG"
                                        @if (old('stnk') == 'KURANG') checked @endif> Kurang
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="air_accu" value="TIDAK ADA">
                                    @if (old('stnk') == 'TIDAK ADA')
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
                                        @if (old('stnk') == 'BAIK') checked @endif> Baik
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="air_wipper" value="CUKUP">
                                    @if (old('stnk') == 'CUKUP')
                                        checked
                                    @endif Cukup
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="air_wipper" value="RUSAK">
                                    @if (old('stnk') == 'RUSAK')
                                        checked
                                    @endif Rusak
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="air_wipper" value="KURANG"
                                        @if (old('stnk') == 'KURANG') checked @endif> Kurang
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="air_wipper" value="TIDAK ADA">
                                    @if (old('stnk') == 'TIDAK ADA')
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
                                        @if (old('stnk') == 'BAIK') checked @endif> Baik
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="air_ac" value="CUKUP">
                                    @if (old('stnk') == 'CUKUP')
                                        checked
                                    @endif Cukup
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="air_ac" value="RUSAK">
                                    @if (old('stnk') == 'RUSAK')
                                        checked
                                    @endif Rusak
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="air_ac" value="KURANG"
                                        @if (old('stnk') == 'KURANG') checked @endif> Kurang
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="air_ac" value="TIDAK ADA">
                                    @if (old('stnk') == 'TIDAK ADA')
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
                                        @if (old('stnk') == 'BAIK') checked @endif> Baik
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="oli_mesin" value="CUKUP">
                                    @if (old('stnk') == 'CUKUP')
                                        checked
                                    @endif Cukup
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="oli_mesin" value="RUSAK">
                                    @if (old('stnk') == 'RUSAK')
                                        checked
                                    @endif Rusak
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="oli_mesin" value="KURANG"
                                        @if (old('stnk') == 'KURANG') checked @endif> Kurang
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="oli_mesin" value="TIDAK ADA">
                                    @if (old('stnk') == 'TIDAK ADA')
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
                                        @if (old('stnk') == 'BAIK') checked @endif> Baik
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="minyak_rem" value="CUKUP">
                                    @if (old('stnk') == 'CUKUP')
                                        checked
                                    @endif Cukup
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="minyak_rem" value="RUSAK">
                                    @if (old('stnk') == 'RUSAK')
                                        checked
                                    @endif Rusak
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="minyak_rem" value="KURANG"
                                        @if (old('stnk') == 'KURANG') checked @endif> Kurang
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="minyak_rem" value="TIDAK ADA">
                                    @if (old('stnk') == 'TIDAK ADA')
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
                                        @if (old('stnk') == 'BAIK') checked @endif> Baik
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="oli_steering" value="CUKUP">
                                    @if (old('stnk') == 'CUKUP')
                                        checked
                                    @endif Cukup
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="oli_steering" value="RUSAK">
                                    @if (old('stnk') == 'RUSAK')
                                        checked
                                    @endif Rusak
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="oli_steering" value="KURANG"
                                        @if (old('stnk') == 'KURANG') checked @endif> Kurang
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="oli_steering" value="TIDAK ADA">
                                    @if (old('stnk') == 'TIDAK ADA')
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
                                                @if (old('stnk') == 'BAIK') checked @endif> Baik
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="lampu_utama" value="CUKUP">
                                            @if (old('stnk') == 'CUKUP')
                                                checked
                                            @endif Cukup
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="lampu_utama" value="RUSAK">
                                            @if (old('stnk') == 'RUSAK')
                                                checked
                                            @endif Rusak
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="lampu_utama" value="KURANG"
                                                @if (old('stnk') == 'KURANG') checked @endif> Kurang
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="lampu_utama" value="TIDAK ADA">
                                            @if (old('stnk') == 'TIDAK ADA')
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
                                                @if (old('stnk') == 'BAIK') checked @endif> Baik
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="lampu_kota" value="CUKUP">
                                            @if (old('stnk') == 'CUKUP')
                                                checked
                                            @endif Cukup
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="lampu_kota" value="RUSAK">
                                            @if (old('stnk') == 'RUSAK')
                                                checked
                                            @endif Rusak
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="lampu_kota" value="KURANG"
                                                @if (old('stnk') == 'KURANG') checked @endif> Kurang
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="lampu_kota" value="TIDAK ADA">
                                            @if (old('stnk') == 'TIDAK ADA')
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
                                                @if (old('stnk') == 'BAIK') checked @endif> Baik
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="fog_lamp" value="CUKUP">
                                            @if (old('stnk') == 'CUKUP')
                                                checked
                                            @endif Cukup
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="fog_lamp" value="RUSAK">
                                            @if (old('stnk') == 'RUSAK')
                                                checked
                                            @endif Rusak
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="fog_lamp" value="KURANG"
                                                @if (old('stnk') == 'KURANG') checked @endif> Kurang
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="fog_lamp" value="TIDAK ADA">
                                            @if (old('stnk') == 'TIDAK ADA')
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
                                                @if (old('stnk') == 'BAIK') checked @endif> Baik
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="lampu_sein" value="CUKUP">
                                            @if (old('stnk') == 'CUKUP')
                                                checked
                                            @endif Cukup
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="lampu_sein" value="RUSAK">
                                            @if (old('stnk') == 'RUSAK')
                                                checked
                                            @endif Rusak
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="lampu_sein" value="KURANG"
                                                @if (old('stnk') == 'KURANG') checked @endif> Kurang
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="lampu_sein" value="TIDAK ADA">
                                            @if (old('stnk') == 'TIDAK ADA')
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
                                                @if (old('stnk') == 'BAIK') checked @endif> Baik
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="lampu_belakang" value="CUKUP">
                                            @if (old('stnk') == 'CUKUP')
                                                checked
                                            @endif Cukup
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="lampu_belakang" value="RUSAK">
                                            @if (old('stnk') == 'RUSAK')
                                                checked
                                            @endif Rusak
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="lampu_belakang" value="KURANG"
                                                @if (old('stnk') == 'KURANG') checked @endif> Kurang
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="lampu_belakang" value="TIDAK ADA">
                                            @if (old('stnk') == 'TIDAK ADA')
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
                                                @if (old('stnk') == 'BAIK') checked @endif> Baik
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="lampu_atret" value="CUKUP">
                                            @if (old('stnk') == 'CUKUP')
                                                checked
                                            @endif Cukup
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="lampu_atret" value="RUSAK">
                                            @if (old('stnk') == 'RUSAK')
                                                checked
                                            @endif Rusak
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="lampu_atret" value="KURANG"
                                                @if (old('stnk') == 'KURANG') checked @endif> Kurang
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="lampu_atret" value="TIDAK ADA">
                                            @if (old('stnk') == 'TIDAK ADA')
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
                                                @if (old('stnk') == 'BAIK') checked @endif> Baik
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="lampu_kabin" value="CUKUP">
                                            @if (old('stnk') == 'CUKUP')
                                                checked
                                            @endif Cukup
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="lampu_kabin" value="RUSAK">
                                            @if (old('stnk') == 'RUSAK')
                                                checked
                                            @endif Rusak
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="lampu_kabin" value="KURANG"
                                                @if (old('stnk') == 'KURANG') checked @endif> Kurang
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="lampu_kabin" value="TIDAK ADA">
                                            @if (old('stnk') == 'TIDAK ADA')
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
                                                @if (old('stnk') == 'BAIK') checked @endif> Baik
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="ban_terpasang" value="CUKUP">
                                            @if (old('stnk') == 'CUKUP')
                                                checked
                                            @endif Cukup
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="ban_terpasang" value="RUSAK">
                                            @if (old('stnk') == 'RUSAK')
                                                checked
                                            @endif Rusak
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="ban_terpasang" value="KURANG"
                                                @if (old('stnk') == 'KURANG') checked @endif> Kurang
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="ban_terpasang" value="TIDAK ADA">
                                            @if (old('stnk') == 'TIDAK ADA')
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
                                                @if (old('stnk') == 'BAIK') checked @endif> Baik
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="ban_serve" value="CUKUP">
                                            @if (old('stnk') == 'CUKUP')
                                                checked
                                            @endif Cukup
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="ban_serve" value="RUSAK">
                                            @if (old('stnk') == 'RUSAK')
                                                checked
                                            @endif Rusak
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="ban_serve" value="KURANG"
                                                @if (old('stnk') == 'KURANG') checked @endif> Kurang
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="ban_serve" value="TIDAK ADA">
                                            @if (old('stnk') == 'TIDAK ADA')
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
                                                @if (old('stnk') == 'BAIK') checked @endif> Baik
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="wipper_depan" value="CUKUP">
                                            @if (old('stnk') == 'CUKUP')
                                                checked
                                            @endif Cukup
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="wipper_depan" value="RUSAK">
                                            @if (old('stnk') == 'RUSAK')
                                                checked
                                            @endif Rusak
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="wipper_depan" value="KURANG"
                                                @if (old('stnk') == 'KURANG') checked @endif> Kurang
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="wipper_depan" value="TIDAK ADA">
                                            @if (old('stnk') == 'TIDAK ADA')
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
                                                @if (old('stnk') == 'BAIK') checked @endif> Baik
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="wipper_belakang" value="CUKUP">
                                            @if (old('stnk') == 'CUKUP')
                                                checked
                                            @endif Cukup
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="wipper_belakang" value="RUSAK">
                                            @if (old('stnk') == 'RUSAK')
                                                checked
                                            @endif Rusak
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="wipper_belakang" value="KURANG"
                                                @if (old('stnk') == 'KURANG') checked @endif> Kurang
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="wipper_belakang" value="TIDAK ADA">
                                            @if (old('stnk') == 'TIDAK ADA')
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
                                        @if (old('stnk') == 'BAIK') checked @endif> Baik
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="suara_mesin" value="CUKUP">
                                    @if (old('stnk') == 'CUKUP')
                                        checked
                                    @endif Cukup
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="suara_mesin" value="RUSAK">
                                    @if (old('stnk') == 'RUSAK')
                                        checked
                                    @endif Rusak
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="suara_mesin" value="KURANG"
                                        @if (old('stnk') == 'KURANG') checked @endif> Kurang
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="suara_mesin" value="TIDAK ADA">
                                    @if (old('stnk') == 'TIDAK ADA')
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
                                        @if (old('stnk') == 'BAIK') checked @endif> Baik
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="rem" value="CUKUP">
                                    @if (old('stnk') == 'CUKUP')
                                        checked
                                    @endif Cukup
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="rem" value="RUSAK">
                                    @if (old('stnk') == 'RUSAK')
                                        checked
                                    @endif Rusak
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="rem" value="KURANG"
                                        @if (old('stnk') == 'KURANG') checked @endif> Kurang
                                </label>
                                <label class="form-check-label mx-4">
                                    <input type="radio" name="rem" value="TIDAK ADA">
                                    @if (old('stnk') == 'TIDAK ADA')
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
                                                @if (old('stnk') == 'BAIK') checked @endif> Baik
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="kunci_roda" value="CUKUP">
                                            @if (old('stnk') == 'CUKUP')
                                                checked
                                            @endif Cukup
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="kunci_roda" value="RUSAK">
                                            @if (old('stnk') == 'RUSAK')
                                                checked
                                            @endif Rusak
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="kunci_roda" value="KURANG"
                                                @if (old('stnk') == 'KURANG') checked @endif> Kurang
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="kunci_roda" value="TIDAK ADA">
                                            @if (old('stnk') == 'TIDAK ADA')
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
                                                @if (old('stnk') == 'BAIK') checked @endif> Baik
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="dongkrak" value="CUKUP">
                                            @if (old('stnk') == 'CUKUP')
                                                checked
                                            @endif Cukup
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="dongkrak" value="RUSAK">
                                            @if (old('stnk') == 'RUSAK')
                                                checked
                                            @endif Rusak
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="dongkrak" value="KURANG"
                                                @if (old('stnk') == 'KURANG') checked @endif> Kurang
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="dongkrak" value="TIDAK ADA">
                                            @if (old('stnk') == 'TIDAK ADA')
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
                                                @if (old('stnk') == 'BAIK') checked @endif> Baik
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="segitiga_pengaman" value="CUKUP">
                                            @if (old('stnk') == 'CUKUP')
                                                checked
                                            @endif Cukup
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="segitiga_pengaman" value="RUSAK">
                                            @if (old('stnk') == 'RUSAK')
                                                checked
                                            @endif Rusak
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="segitiga_pengaman" value="KURANG"
                                                @if (old('stnk') == 'KURANG') checked @endif> Kurang
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="segitiga_pengaman" value="TIDAK ADA">
                                            @if (old('stnk') == 'TIDAK ADA')
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
                                                @if (old('stnk') == 'BAIK') checked @endif> Baik
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="kebersihan" value="CUKUP">
                                            @if (old('stnk') == 'CUKUP')
                                                checked
                                            @endif Cukup
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="kebersihan" value="RUSAK">
                                            @if (old('stnk') == 'RUSAK')
                                                checked
                                            @endif Rusak
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="kebersihan" value="KURANG"
                                                @if (old('stnk') == 'KURANG') checked @endif> Kurang
                                        </label>
                                        <label class="form-check-label mx-4">
                                            <input type="radio" name="kebersihan" value="TIDAK ADA">
                                            @if (old('stnk') == 'TIDAK ADA')
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
