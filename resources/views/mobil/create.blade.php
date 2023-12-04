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
                        <div class="col-md-6 mb-3">
                            <label for="nopol" class="form-label">Nopol</label>
                            <input class="form-control @error('nopol') is-invalid @enderror" type="text" name="nopol"
                                id="nopol" value="{{ old('nopol') }}" placeholder="Masukkan Nomor Polisi">
                            @error('nopol')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="merk" class="form-label">Merk/Jenis Kendaraan</label>
                            <input class="form-control @error('merk') is-invalid @enderror" type="text" name="merk"
                                id="merk" value="{{ old('merk') }}" placeholder="Masukkan Merk/Jenis Kendaraan">
                            @error('merk')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="odo_meter" class="form-label">Odometer</label>
                            <input class="form-control @error('odo_meter') is-invalid @enderror" type="text"
                                name="odo_meter" id="odo_meter" value="{{ old('odo_meter') }}"
                                placeholder="Masukkan Odometer">
                            @error('odo_meter')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="bensin" class="form-label">Bensin</label>
                            <input class="form-control @error('bensin') is-invalid @enderror" type="text" name="bensin"
                                id="bensin" value="{{ old('bensin') }}" placeholder="Masukkan Bensin">
                            @error('bensin')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
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
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="stnk" value="BAIK"
                                                    @if (old('stnk') == 'BAIK') checked @endif>
                                                <label class="form-check-label" for="stnk_baik">Baik</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="stnk" value="CUKUP"
                                                    @if (old('stnk') == 'CUKUP') checked @endif>
                                                <label class="form-check-label" for="stnk_cukup">Cukup</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="stnk" value="RUSAK"
                                                    @if (old('stnk') == 'RUSAK') checked @endif>
                                                <label class="form-check-label" for="rusak">Rusak</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="stnk" value="KURANG"
                                                    @if (old('stnk') == 'KURANG') checked @endif>
                                                <label class="form-check-label" for="stnk_kurang">Kurang</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="stnk"
                                                    value="TIDAK ADA" @if (old('stnk') == 'TIDAK ADA') checked @endif>
                                                <label class="form-check-label" for="stnk_tidak_ada">Tidak Ada/Ada</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="pajak"
                                                    value="BAIK" @if (old('pajak') == 'BAIK') checked @endif>
                                                <label class="form-check-label" for="pajak_baik">Baik</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="pajak"
                                                    value="CUKUP" @if (old('pajak') == 'CUKUP') checked @endif>
                                                <label class="form-check-label" for="pajak_cukup">Cukup</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="pajak"
                                                    value="RUSAK" @if (old('pajak') == 'RUSAK') checked @endif>
                                                <label class="form-check-label" for="pajak_rusak">Rusak</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="pajak"
                                                    value="KURANG" @if (old('pajak') == 'KURANG') checked @endif>
                                                <label class="form-check-label" for="pajak_kurang">Kurang</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="pajak"
                                                    value="TIDAK ADA" @if (old('pajak') == 'TIDAK ADA') checked @endif>
                                                <label class="form-check-label" for="pajak_tidak_ada">Tidak
                                                    Ada/Ada</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="uji_keur"
                                                    value="BAIK" @if (old('uji_keur') == 'BAIK') checked @endif>
                                                <label class="form-check-label" for="uji_keur_baik">Baik</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="uji_keur"
                                                    value="CUKUP" @if (old('uji_keur') == 'CUKUP') checked @endif>
                                                <label class="form-check-label" for="uji_keur_cukup">Cukup</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="uji_keur"
                                                    value="RUSAK" @if (old('uji_keur') == 'RUSAK') checked @endif>
                                                <label class="form-check-label" for="uji_keur_rusak">Rusak</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="uji_keur"
                                                    value="KURANG" @if (old('uji_keur') == 'KURANG') checked @endif>
                                                <label class="form-check-label" for="uji_keur_kurang">Kurang</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="uji_keur"
                                                    value="TIDAK ADA" @if (old('uji_keur') == 'TIDAK ADA') checked @endif>
                                                <label class="form-check-label" for="uji_keur_tidak_ada">Tidak
                                                    Ada/Ada</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="lain_lain"
                                                    value="BAIK" @if (old('lain_lain') == 'BAIK') checked @endif>
                                                <label class="form-check-label" for="lain_lain_baik">Baik</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="lain_lain"
                                                    value="CUKUP" @if (old('lain_lain') == 'CUKUP') checked @endif>
                                                <label class="form-check-label" for="lain_lain_cukup">Cukup</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="lain_lain"
                                                    value="RUSAK" @if (old('lain_lain') == 'RUSAK') checked @endif>
                                                <label class="form-check-label" for="lain_lain_rusak">Rusak</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="lain_lain"
                                                    value="KURANG" @if (old('lain_lain') == 'KURANG') checked @endif>
                                                <label class="form-check-label" for="lain_lain_kurang">Kurang</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="lain_lain"
                                                    value="TIDAK ADA" @if (old('lain_lain') == 'TIDAK ADA') checked @endif>
                                                <label class="form-check-label" for="lain_lain_tidak_ada">Tidak
                                                    Ada/Ada</label>
                                            </div>
                                        </div>
                                    </div>
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
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="body_luar" value="BAIK"
                                            @if (old('body_luar') == 'BAIK') checked @endif>
                                        <label class="form-check-label" for="body_luar_baik">Baik</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="body_luar" value="CUKUP"
                                            @if (old('body_luar') == 'CUKUP') checked @endif>
                                        <label class="form-check-label" for="body_luar_cukup">Cukup</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="body_luar" value="RUSAK"
                                            @if (old('body_luar') == 'RUSAK') checked @endif>
                                        <label class="form-check-label" for="body_luar_rusak">Rusak</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="body_luar" value="KURANG"
                                            @if (old('body_luar') == 'KURANG') checked @endif>
                                        <label class="form-check-label" for="body_luar_kurang">Kurang</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="body_luar"
                                            value="TIDAK ADA" @if (old('body_luar') == 'TIDAK ADA') checked @endif>
                                        <label class="form-check-label" for="body_luar_tidak_ada">Tidak
                                            Ada/Ada</label>
                                    </div>
                                </div>
                            </div>
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
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="air_radiator"
                                            value="BAIK" @if (old('air_radiator') == 'BAIK') checked @endif>
                                        <label class="form-check-label" for="air_radiator_baik">Baik</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="air_radiator"
                                            value="CUKUP" @if (old('air_radiator') == 'CUKUP') checked @endif>
                                        <label class="form-check-label" for="air_radiator_cukup">Cukup</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="air_radiator"
                                            value="RUSAK" @if (old('air_radiator') == 'RUSAK') checked @endif>
                                        <label class="form-check-label" for="air_radiator_rusak">Rusak</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="air_radiator"
                                            value="KURANG" @if (old('air_radiator') == 'KURANG') checked @endif>
                                        <label class="form-check-label" for="air_radiator_kurang">Kurang</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="air_radiator"
                                            value="TIDAK ADA" @if (old('air_radiator') == 'TIDAK ADA') checked @endif>
                                        <label class="form-check-label" for="air_radiator_tidak_ada">Tidak
                                            Ada/Ada</label>
                                    </div>
                                </div>
                            </div>
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
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="air_accu" value="BAIK"
                                            @if (old('air_accu') == 'BAIK') checked @endif>
                                        <label class="form-check-label" for="air_accu_baik">Baik</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="air_accu" value="CUKUP"
                                            @if (old('air_accu') == 'CUKUP') checked @endif>
                                        <label class="form-check-label" for="air_accu_cukup">Cukup</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="air_accu" value="RUSAK"
                                            @if (old('air_accu') == 'RUSAK') checked @endif>
                                        <label class="form-check-label" for="air_accu_rusak">Rusak</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="air_accu" value="KURANG"
                                            @if (old('air_accu') == 'KURANG') checked @endif>
                                        <label class="form-check-label" for="air_accu_kurang">Kurang</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="air_accu" value="TIDAK ADA"
                                            @if (old('air_accu') == 'TIDAK ADA') checked @endif>
                                        <label class="form-check-label" for="air_accu_tidak_ada">Tidak
                                            Ada/Ada</label>
                                    </div>
                                </div>
                            </div>
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
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="air_wipper" value="BAIK"
                                            @if (old('air_wipper') == 'BAIK') checked @endif>
                                        <label class="form-check-label" for="air_wipper_baik">Baik</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="air_wipper" value="CUKUP"
                                            @if (old('air_wipper') == 'CUKUP') checked @endif>
                                        <label class="form-check-label" for="air_wipper_cukup">Cukup</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="air_wipper" value="RUSAK"
                                            @if (old('air_wipper') == 'RUSAK') checked @endif>
                                        <label class="form-check-label" for="air_wipper_rusak">Rusak</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="air_wipper" value="KURANG"
                                            @if (old('air_wipper') == 'KURANG') checked @endif>
                                        <label class="form-check-label" for="air_wipper_kurang">Kurang</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="air_wipper"
                                            value="TIDAK ADA" @if (old('air_wipper') == 'TIDAK ADA') checked @endif>
                                        <label class="form-check-label" for="air_wipper_tidak_ada">Tidak
                                            Ada/Ada</label>
                                    </div>
                                </div>
                            </div>
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
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="air_ac" value="BAIK"
                                            @if (old('air_ac') == 'BAIK') checked @endif>
                                        <label class="form-check-label" for="air_ac_baik">Baik</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="air_ac" value="CUKUP"
                                            @if (old('air_ac') == 'CUKUP') checked @endif>
                                        <label class="form-check-label" for="air_ac_cukup">Cukup</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="air_ac" value="RUSAK"
                                            @if (old('air_ac') == 'RUSAK') checked @endif>
                                        <label class="form-check-label" for="air_ac_rusak">Rusak</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="air_ac" value="KURANG"
                                            @if (old('air_ac') == 'KURANG') checked @endif>
                                        <label class="form-check-label" for="air_ac_kurang">Kurang</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="air_ac" value="TIDAK ADA"
                                            @if (old('air_ac') == 'TIDAK ADA') checked @endif>
                                        <label class="form-check-label" for="air_ac_tidak_ada">Tidak
                                            Ada/Ada</label>
                                    </div>
                                </div>
                            </div>
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
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="oli_mesin" value="BAIK"
                                            @if (old('oli_mesin') == 'BAIK') checked @endif>
                                        <label class="form-check-label" for="oli_mesin_baik">Baik</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="oli_mesin" value="CUKUP"
                                            @if (old('oli_mesin') == 'CUKUP') checked @endif>
                                        <label class="form-check-label" for="oli_mesin_cukup">Cukup</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="oli_mesin" value="RUSAK"
                                            @if (old('oli_mesin') == 'RUSAK') checked @endif>
                                        <label class="form-check-label" for="oli_mesin_rusak">Rusak</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="oli_mesin" value="KURANG"
                                            @if (old('oli_mesin') == 'KURANG') checked @endif>
                                        <label class="form-check-label" for="oli_mesin_kurang">Kurang</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="oli_mesin"
                                            value="TIDAK ADA" @if (old('oli_mesin') == 'TIDAK ADA') checked @endif>
                                        <label class="form-check-label" for="oli_mesin_tidak_ada">Tidak
                                            Ada/Ada</label>
                                    </div>
                                </div>
                            </div>
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
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="minyak_rem" value="BAIK"
                                            @if (old('minyak_rem') == 'BAIK') checked @endif>
                                        <label class="form-check-label" for="minyak_rem_baik">Baik</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="minyak_rem" value="CUKUP"
                                            @if (old('minyak_rem') == 'CUKUP') checked @endif>
                                        <label class="form-check-label" for="minyak_rem_cukup">Cukup</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="minyak_rem" value="RUSAK"
                                            @if (old('minyak_rem') == 'RUSAK') checked @endif>
                                        <label class="form-check-label" for="minyak_rem_rusak">Rusak</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="minyak_rem" value="KURANG"
                                            @if (old('minyak_rem') == 'KURANG') checked @endif>
                                        <label class="form-check-label" for="minyak_rem_kurang">Kurang</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="minyak_rem"
                                            value="TIDAK ADA" @if (old('minyak_rem') == 'TIDAK ADA') checked @endif>
                                        <label class="form-check-label" for="minyak_rem_tidak_ada">Tidak
                                            Ada/Ada</label>
                                    </div>
                                </div>
                            </div>
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
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="oli_steering"
                                            value="BAIK" @if (old('oli_steering') == 'BAIK') checked @endif>
                                        <label class="form-check-label" for="oli_steering_baik">Baik</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="oli_steering"
                                            value="CUKUP" @if (old('oli_steering') == 'CUKUP') checked @endif>
                                        <label class="form-check-label" for="oli_steering_cukup">Cukup</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="oli_steering"
                                            value="RUSAK" @if (old('oli_steering') == 'RUSAK') checked @endif>
                                        <label class="form-check-label" for="oli_steering_rusak">Rusak</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="oli_steering"
                                            value="KURANG" @if (old('oli_steering') == 'KURANG') checked @endif>
                                        <label class="form-check-label" for="oli_steering_kurang">Kurang</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="oli_steering"
                                            value="TIDAK ADA" @if (old('oli_steering') == 'TIDAK ADA') checked @endif>
                                        <label class="form-check-label" for="oli_steering_tidak_ada">Tidak
                                            Ada/Ada</label>
                                    </div>
                                </div>
                            </div>
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
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="lampu_utama"
                                                    value="BAIK" @if (old('lampu_utama') == 'BAIK') checked @endif>
                                                <label class="form-check-label" for="lampu_utama_baik">Baik</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="lampu_utama"
                                                    value="CUKUP" @if (old('lampu_utama') == 'CUKUP') checked @endif>
                                                <label class="form-check-label" for="lampu_utama_cukup">Cukup</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="lampu_utama"
                                                    value="RUSAK" @if (old('lampu_utama') == 'RUSAK') checked @endif>
                                                <label class="form-check-label" for="rusak">Rusak</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="lampu_utama"
                                                    value="KURANG" @if (old('lampu_utama') == 'KURANG') checked @endif>
                                                <label class="form-check-label" for="lampu_utama_kurang">Kurang</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="lampu_utama"
                                                    value="TIDAK ADA" @if (old('lampu_utama') == 'TIDAK ADA') checked @endif>
                                                <label class="form-check-label" for="lampu_utama_tidak_ada">Tidak
                                                    Ada/Ada</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="lampu_kota"
                                                    value="BAIK" @if (old('lampu_kota') == 'BAIK') checked @endif>
                                                <label class="form-check-label" for="lampu_kota_baik">Baik</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="lampu_kota"
                                                    value="CUKUP" @if (old('lampu_kota') == 'CUKUP') checked @endif>
                                                <label class="form-check-label" for="lampu_kota_cukup">Cukup</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="lampu_kota"
                                                    value="RUSAK" @if (old('lampu_kota') == 'RUSAK') checked @endif>
                                                <label class="form-check-label" for="lampu_kota_rusak">Rusak</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="lampu_kota"
                                                    value="KURANG" @if (old('lampu_kota') == 'KURANG') checked @endif>
                                                <label class="form-check-label" for="lampu_kota_kurang">Kurang</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="lampu_kota"
                                                    value="TIDAK ADA" @if (old('lampu_kota') == 'TIDAK ADA') checked @endif>
                                                <label class="form-check-label" for="lampu_kota_tidak_ada">Tidak
                                                    Ada/Ada</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="fog_lamp"
                                                    value="BAIK" @if (old('fog_lamp') == 'BAIK') checked @endif>
                                                <label class="form-check-label" for="fog_lamp_baik">Baik</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="fog_lamp"
                                                    value="CUKUP" @if (old('fog_lamp') == 'CUKUP') checked @endif>
                                                <label class="form-check-label" for="fog_lamp_cukup">Cukup</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="fog_lamp"
                                                    value="RUSAK" @if (old('fog_lamp') == 'RUSAK') checked @endif>
                                                <label class="form-check-label" for="fog_lamp_rusak">Rusak</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="fog_lamp"
                                                    value="KURANG" @if (old('fog_lamp') == 'KURANG') checked @endif>
                                                <label class="form-check-label" for="fog_lamp_kurang">Kurang</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="fog_lamp"
                                                    value="TIDAK ADA" @if (old('fog_lamp') == 'TIDAK ADA') checked @endif>
                                                <label class="form-check-label" for="fog_lamp_tidak_ada">Tidak
                                                    Ada/Ada</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="lampu_sein"
                                                    value="BAIK" @if (old('lampu_sein') == 'BAIK') checked @endif>
                                                <label class="form-check-label" for="lampu_sein_baik">Baik</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="lampu_sein"
                                                    value="CUKUP" @if (old('lampu_sein') == 'CUKUP') checked @endif>
                                                <label class="form-check-label" for="lampu_sein_cukup">Cukup</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="lampu_sein"
                                                    value="RUSAK" @if (old('lampu_sein') == 'RUSAK') checked @endif>
                                                <label class="form-check-label" for="lampu_sein_rusak">Rusak</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="lampu_sein"
                                                    value="KURANG" @if (old('lampu_sein') == 'KURANG') checked @endif>
                                                <label class="form-check-label" for="lampu_sein_kurang">Kurang</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="lampu_sein"
                                                    value="TIDAK ADA" @if (old('lampu_sein') == 'TIDAK ADA') checked @endif>
                                                <label class="form-check-label" for="lampu_sein_tidak_ada">Tidak
                                                    Ada/Ada</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="lampu_belakang"
                                                    value="BAIK" @if (old('lampu_belakang') == 'BAIK') checked @endif>
                                                <label class="form-check-label" for="lampu_belakang_baik">Baik</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="lampu_belakang"
                                                    value="CUKUP" @if (old('lampu_belakang') == 'CUKUP') checked @endif>
                                                <label class="form-check-label" for="lampu_belakang_cukup">Cukup</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="lampu_belakang"
                                                    value="RUSAK" @if (old('lampu_belakang') == 'RUSAK') checked @endif>
                                                <label class="form-check-label" for="lampu_belakang_rusak">Rusak</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="lampu_belakang"
                                                    value="KURANG" @if (old('lampu_belakang') == 'KURANG') checked @endif>
                                                <label class="form-check-label" for="lampu_belakang_kurang">Kurang</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="lampu_belakang"
                                                    value="TIDAK ADA" @if (old('lampu_belakang') == 'TIDAK ADA') checked @endif>
                                                <label class="form-check-label" for="lampu_belakang_tidak_ada">Tidak
                                                    Ada/Ada</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="lampu_atret"
                                                    value="BAIK" @if (old('lampu_atret') == 'BAIK') checked @endif>
                                                <label class="form-check-label" for="lampu_atret_baik">Baik</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="lampu_atret"
                                                    value="CUKUP" @if (old('lampu_atret') == 'CUKUP') checked @endif>
                                                <label class="form-check-label" for="lampu_atret_cukup">Cukup</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="lampu_atret"
                                                    value="RUSAK" @if (old('lampu_atret') == 'RUSAK') checked @endif>
                                                <label class="form-check-label" for="lampu_atret_rusak">Rusak</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="lampu_atret"
                                                    value="KURANG" @if (old('lampu_atret') == 'KURANG') checked @endif>
                                                <label class="form-check-label" for="lampu_atret_kurang">Kurang</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="lampu_atret"
                                                    value="TIDAK ADA" @if (old('lampu_atret') == 'TIDAK ADA') checked @endif>
                                                <label class="form-check-label" for="lampu_atret_tidak_ada">Tidak
                                                    Ada/Ada</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="lampu_kabin"
                                                    value="BAIK" @if (old('lampu_kabin') == 'BAIK') checked @endif>
                                                <label class="form-check-label" for="lampu_kabin_baik">Baik</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="lampu_kabin"
                                                    value="CUKUP" @if (old('lampu_kabin') == 'CUKUP') checked @endif>
                                                <label class="form-check-label" for="lampu_kabin_cukup">Cukup</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="lampu_kabin"
                                                    value="RUSAK" @if (old('lampu_kabin') == 'RUSAK') checked @endif>
                                                <label class="form-check-label" for="lampu_kabin_rusak">Rusak</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="lampu_kabin"
                                                    value="KURANG" @if (old('lampu_kabin') == 'KURANG') checked @endif>
                                                <label class="form-check-label" for="lampu_kabin_kurang">Kurang</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="lampu_kabin"
                                                    value="TIDAK ADA" @if (old('lampu_kabin') == 'TIDAK ADA') checked @endif>
                                                <label class="form-check-label" for="lampu_kabin_tidak_ada">Tidak
                                                    Ada/Ada</label>
                                            </div>
                                        </div>
                                    </div>
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
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="ban_terpasang"
                                                    value="BAIK" @if (old('ban_terpasang') == 'BAIK') checked @endif>
                                                <label class="form-check-label" for="ban_terpasang_baik">Baik</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="ban_terpasang"
                                                    value="CUKUP" @if (old('ban_terpasang') == 'CUKUP') checked @endif>
                                                <label class="form-check-label" for="ban_terpasang_cukup">Cukup</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="ban_terpasang"
                                                    value="RUSAK" @if (old('ban_terpasang') == 'RUSAK') checked @endif>
                                                <label class="form-check-label" for="rusak">Rusak</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="ban_terpasang"
                                                    value="KURANG" @if (old('ban_terpasang') == 'KURANG') checked @endif>
                                                <label class="form-check-label" for="ban_terpasang_kurang">Kurang</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="ban_terpasang"
                                                    value="TIDAK ADA" @if (old('ban_terpasang') == 'TIDAK ADA') checked @endif>
                                                <label class="form-check-label" for="ban_terpasang_tidak_ada">Tidak
                                                    Ada/Ada</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="ban_serve"
                                                    value="BAIK" @if (old('ban_serve') == 'BAIK') checked @endif>
                                                <label class="form-check-label" for="ban_serve_baik">Baik</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="ban_serve"
                                                    value="CUKUP" @if (old('ban_serve') == 'CUKUP') checked @endif>
                                                <label class="form-check-label" for="ban_serve_cukup">Cukup</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="ban_serve"
                                                    value="RUSAK" @if (old('ban_serve') == 'RUSAK') checked @endif>
                                                <label class="form-check-label" for="ban_serve_rusak">Rusak</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="ban_serve"
                                                    value="KURANG" @if (old('ban_serve') == 'KURANG') checked @endif>
                                                <label class="form-check-label" for="ban_serve_kurang">Kurang</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="ban_serve"
                                                    value="TIDAK ADA"
                                                    @if (old('ban_serve') == 'TIDAK ADA') checked @endif>
                                                <label class="form-check-label" for="ban_serve_tidak_ada">Tidak
                                                    Ada/Ada</label>
                                            </div>
                                        </div>
                                    </div>
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
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="wipper_depan"
                                                    value="BAIK" @if (old('wipper_depan') == 'BAIK') checked @endif>
                                                <label class="form-check-label" for="wipper_depan_baik">Baik</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="wipper_depan"
                                                    value="CUKUP" @if (old('wipper_depan') == 'CUKUP') checked @endif>
                                                <label class="form-check-label" for="wipper_depan_cukup">Cukup</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="wipper_depan"
                                                    value="RUSAK" @if (old('wipper_depan') == 'RUSAK') checked @endif>
                                                <label class="form-check-label" for="rusak">Rusak</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="wipper_depan"
                                                    value="KURANG" @if (old('wipper_depan') == 'KURANG') checked @endif>
                                                <label class="form-check-label" for="wipper_depan_kurang">Kurang</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="wipper_depan"
                                                    value="TIDAK ADA"
                                                    @if (old('wipper_depan') == 'TIDAK ADA') checked @endif>
                                                <label class="form-check-label" for="wipper_depan_tidak_ada">Tidak
                                                    Ada/Ada</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="wipper_belakang"
                                                    value="BAIK" @if (old('wipper_belakang') == 'BAIK') checked @endif>
                                                <label class="form-check-label" for="wipper_belakang_baik">Baik</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="wipper_belakang"
                                                    value="CUKUP" @if (old('wipper_belakang') == 'CUKUP') checked @endif>
                                                <label class="form-check-label"
                                                    for="wipper_belakang_cukup">Cukup</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="wipper_belakang"
                                                    value="RUSAK" @if (old('wipper_belakang') == 'RUSAK') checked @endif>
                                                <label class="form-check-label"
                                                    for="wipper_belakang_rusak">Rusak</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="wipper_belakang"
                                                    value="KURANG" @if (old('wipper_belakang') == 'KURANG') checked @endif>
                                                <label class="form-check-label"
                                                    for="wipper_belakang_kurang">Kurang</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="wipper_belakang"
                                                    value="TIDAK ADA"
                                                    @if (old('wipper_belakang') == 'TIDAK ADA') checked @endif>
                                                <label class="form-check-label" for="wipper_belakang_tidak_ada">Tidak
                                                    Ada/Ada</label>
                                            </div>
                                        </div>
                                    </div>
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
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="suara_mesin"
                                            value="BAIK" @if (old('suara_mesin') == 'BAIK') checked @endif>
                                        <label class="form-check-label" for="suara_mesin_baik">Baik</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="suara_mesin"
                                            value="CUKUP" @if (old('suara_mesin') == 'CUKUP') checked @endif>
                                        <label class="form-check-label" for="suara_mesin_cukup">Cukup</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="suara_mesin"
                                            value="RUSAK" @if (old('suara_mesin') == 'RUSAK') checked @endif>
                                        <label class="form-check-label" for="suara_mesin_rusak">Rusak</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="suara_mesin"
                                            value="KURANG" @if (old('suara_mesin') == 'KURANG') checked @endif>
                                        <label class="form-check-label" for="suara_mesin_kurang">Kurang</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="suara_mesin"
                                            value="TIDAK ADA" @if (old('suara_mesin') == 'TIDAK ADA') checked @endif>
                                        <label class="form-check-label" for="suara_mesin_tidak_ada">Tidak
                                            Ada/Ada</label>
                                    </div>
                                </div>
                            </div>
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
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="rem" value="BAIK"
                                            @if (old('rem') == 'BAIK') checked @endif>
                                        <label class="form-check-label" for="rem_baik">Baik</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="rem" value="CUKUP"
                                            @if (old('rem') == 'CUKUP') checked @endif>
                                        <label class="form-check-label" for="rem_cukup">Cukup</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="rem" value="RUSAK"
                                            @if (old('rem') == 'RUSAK') checked @endif>
                                        <label class="form-check-label" for="rem_rusak">Rusak</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="rem" value="KURANG"
                                            @if (old('rem') == 'KURANG') checked @endif>
                                        <label class="form-check-label" for="rem_kurang">Kurang</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="rem"
                                            value="TIDAK ADA" @if (old('rem') == 'TIDAK ADA') checked @endif>
                                        <label class="form-check-label" for="rem_tidak_ada">Tidak
                                            Ada/Ada</label>
                                    </div>
                                </div>
                            </div>
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
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="kunci_roda"
                                                    value="BAIK" @if (old('kunci_roda') == 'BAIK') checked @endif>
                                                <label class="form-check-label" for="kunci_roda_baik">Baik</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="kunci_roda"
                                                    value="CUKUP" @if (old('kunci_roda') == 'CUKUP') checked @endif>
                                                <label class="form-check-label" for="kunci_roda_cukup">Cukup</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="kunci_roda"
                                                    value="RUSAK" @if (old('kunci_roda') == 'RUSAK') checked @endif>
                                                <label class="form-check-label" for="rusak">Rusak</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="kunci_roda"
                                                    value="KURANG" @if (old('kunci_roda') == 'KURANG') checked @endif>
                                                <label class="form-check-label" for="kunci_roda_kurang">Kurang</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="kunci_roda"
                                                    value="TIDAK ADA"
                                                    @if (old('kunci_roda') == 'TIDAK ADA') checked @endif>
                                                <label class="form-check-label" for="kunci_roda_tidak_ada">Tidak
                                                    Ada/Ada</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="dongkrak"
                                                    value="BAIK" @if (old('dongkrak') == 'BAIK') checked @endif>
                                                <label class="form-check-label" for="dongkrak_baik">Baik</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="dongkrak"
                                                    value="CUKUP" @if (old('dongkrak') == 'CUKUP') checked @endif>
                                                <label class="form-check-label" for="dongkrak_cukup">Cukup</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="dongkrak"
                                                    value="RUSAK" @if (old('dongkrak') == 'RUSAK') checked @endif>
                                                <label class="form-check-label" for="dongkrak_rusak">Rusak</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="dongkrak"
                                                    value="KURANG" @if (old('dongkrak') == 'KURANG') checked @endif>
                                                <label class="form-check-label" for="dongkrak_kurang">Kurang</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="dongkrak"
                                                    value="TIDAK ADA"
                                                    @if (old('dongkrak') == 'TIDAK ADA') checked @endif>
                                                <label class="form-check-label" for="dongkrak_tidak_ada">Tidak
                                                    Ada/Ada</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                    name="segitiga_pengaman" value="BAIK"
                                                    @if (old('segitiga_pengaman') == 'BAIK') checked @endif>
                                                <label class="form-check-label"
                                                    for="segitiga_pengaman_baik">Baik</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                    name="segitiga_pengaman" value="CUKUP"
                                                    @if (old('segitiga_pengaman') == 'CUKUP') checked @endif>
                                                <label class="form-check-label"
                                                    for="segitiga_pengaman_cukup">Cukup</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                    name="segitiga_pengaman" value="RUSAK"
                                                    @if (old('segitiga_pengaman') == 'RUSAK') checked @endif>
                                                <label class="form-check-label" for="rusak">Rusak</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                    name="segitiga_pengaman" value="KURANG"
                                                    @if (old('segitiga_pengaman') == 'KURANG') checked @endif>
                                                <label class="form-check-label"
                                                    for="segitiga_pengaman_kurang">Kurang</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                    name="segitiga_pengaman" value="TIDAK ADA"
                                                    @if (old('segitiga_pengaman') == 'TIDAK ADA') checked @endif>
                                                <label class="form-check-label" for="segitiga_pengaman_tidak_ada">Tidak
                                                    Ada/Ada</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="kebersihan"
                                                    value="BAIK" @if (old('kebersihan') == 'BAIK') checked @endif>
                                                <label class="form-check-label" for="kebersihan_baik">Baik</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="kebersihan"
                                                    value="CUKUP" @if (old('kebersihan') == 'CUKUP') checked @endif>
                                                <label class="form-check-label" for="kebersihan_cukup">Cukup</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="kebersihan"
                                                    value="RUSAK" @if (old('kebersihan') == 'RUSAK') checked @endif>
                                                <label class="form-check-label" for="kebersihan_rusak">Rusak</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="kebersihan"
                                                    value="KURANG" @if (old('kebersihan') == 'KURANG') checked @endif>
                                                <label class="form-check-label" for="kebersihan_kurang">Kurang</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="kebersihan"
                                                    value="TIDAK ADA"
                                                    @if (old('kebersihan') == 'TIDAK ADA') checked @endif>
                                                <label class="form-check-label" for="kebersihan_tidak_ada">Tidak
                                                    Ada/Ada</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 d-grid">
                            <a href="{{ url('mobil') }}" class="btn btn-outline-dark btn-lg mt-3"><i
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
            </div>
        </form>
    </div>
@endsection
