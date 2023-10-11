@extends('layouts.app')

@section('content')
    <div class="container-sm mt-5">
        <form action="#" method="POST" enctype="multipart/form-data">
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
                                name="nopol" id="nopol" value="" placeholder="Masukkan Nomor Polisi">
                            @error('nopol')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3 ">
                            <label for="merk" class="form-label">Merk/Jenis Kendaraan</label>
                            <input class="form-control @error('merk')
        is-invalid @enderror" type="text"
                                name="merk" id="merk" value="" placeholder="Masukkan Merk/Jenis Kendaraan">
                            @error('merk')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3 ">
                            <label for="odoometer" class="form-label">Odometer</label>
                            <input class="form-control @error('odoometer')
        is-invalid @enderror" type="text"
                                name="odoometer" id="odoometer" value="" placeholder="Masukkan Oodometer">
                            @error('odoometer')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3 ">
                            <label for="bensin" class="form-label">Bensin</label>
                            <input class="form-control @error('bensin')
        is-invalid @enderror" type="text"
                                name="bensin" id="bensin" value="" placeholder="Masukkan Bensin">
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
                                    </div>
                                    <div class="col-md-1">
                                        <h6>:</h6>
                                    </div>
                                    <div class="col-md-9">
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="baik"> Baik
                                        </label>
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="cukup"> Cukup
                                        </label>
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="rusak"> Rusak
                                        </label>
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="kurang"> Kurang
                                        </label>
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="tidak_ada"> Tidak Ada/Ada
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <h6>Pajak</h6>
                                    </div>
                                    <div class="col-md-1">
                                        <h6>:</h6>
                                    </div>
                                    <div class="col-md-9">
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="baik"> Baik
                                        </label>
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="cukup"> Cukup
                                        </label>
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="rusak"> Rusak
                                        </label>
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="kurang"> Kurang
                                        </label>
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="tidak_ada"> Tidak Ada/Ada
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <h6>Uji Keur</h6>
                                    </div>
                                    <div class="col-md-1">
                                        <h6>:</h6>
                                    </div>
                                    <div class="col-md-9">
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="baik"> Baik
                                        </label>
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="cukup"> Cukup
                                        </label>
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="rusak"> Rusak
                                        </label>
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="kurang"> Kurang
                                        </label>
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="tidak_ada"> Tidak Ada/Ada
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <h6>Lain-lain</h6>
                                    </div>
                                    <div class="col-md-1">
                                        <h6>:</h6>
                                    </div>
                                    <div class="col-md-9">
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="baik"> Baik
                                        </label>
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="cukup"> Cukup
                                        </label>
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="rusak"> Rusak
                                        </label>
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="kurang"> Kurang
                                        </label>
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="tidak_ada"> Tidak Ada/Ada
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-2">
                                <h6>Body Bagian Luar</h6>
                            </div>
                            <div class="col-md-1">
                                <h6>:</h6>
                            </div>
                            <div class="col-md-9">
                                <label class="form-check-label">
                                    <input type="radio" name="stnk_kondisi" value="baik"> Baik
                                </label>
                                <label class="form-check-label">
                                    <input type="radio" name="stnk_kondisi" value="cukup"> Cukup
                                </label>
                                <label class="form-check-label">
                                    <input type="radio" name="stnk_kondisi" value="rusak"> Rusak
                                </label>
                                <label class="form-check-label">
                                    <input type="radio" name="stnk_kondisi" value="kurang"> Kurang
                                </label>
                                <label class="form-check-label">
                                    <input type="radio" name="stnk_kondisi" value="tidak_ada"> Tidak Ada/Ada
                                </label>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-2">
                                <h6>Air Radiator</h6>
                            </div>
                            <div class="col-md-1">
                                <h6>:</h6>
                            </div>
                            <div class="col-md-9">
                                <label class="form-check-label">
                                    <input type="radio" name="stnk_kondisi" value="baik"> Baik
                                </label>
                                <label class="form-check-label">
                                    <input type="radio" name="stnk_kondisi" value="cukup"> Cukup
                                </label>
                                <label class="form-check-label">
                                    <input type="radio" name="stnk_kondisi" value="rusak"> Rusak
                                </label>
                                <label class="form-check-label">
                                    <input type="radio" name="stnk_kondisi" value="kurang"> Kurang
                                </label>
                                <label class="form-check-label">
                                    <input type="radio" name="stnk_kondisi" value="tidak_ada"> Tidak Ada/Ada
                                </label>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-2">
                                <h6>Air ACCU</h6>
                            </div>
                            <div class="col-md-1">
                                <h6>:</h6>
                            </div>
                            <div class="col-md-9">
                                <label class="form-check-label">
                                    <input type="radio" name="stnk_kondisi" value="baik"> Baik
                                </label>
                                <label class="form-check-label">
                                    <input type="radio" name="stnk_kondisi" value="cukup"> Cukup
                                </label>
                                <label class="form-check-label">
                                    <input type="radio" name="stnk_kondisi" value="rusak"> Rusak
                                </label>
                                <label class="form-check-label">
                                    <input type="radio" name="stnk_kondisi" value="kurang"> Kurang
                                </label>
                                <label class="form-check-label">
                                    <input type="radio" name="stnk_kondisi" value="tidak_ada"> Tidak Ada/Ada
                                </label>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-2">
                                <h6>Air Wipper</h6>
                            </div>
                            <div class="col-md-1">
                                <h6>:</h6>
                            </div>
                            <div class="col-md-9">
                                <label class="form-check-label">
                                    <input type="radio" name="stnk_kondisi" value="baik"> Baik
                                </label>
                                <label class="form-check-label">
                                    <input type="radio" name="stnk_kondisi" value="cukup"> Cukup
                                </label>
                                <label class="form-check-label">
                                    <input type="radio" name="stnk_kondisi" value="rusak"> Rusak
                                </label>
                                <label class="form-check-label">
                                    <input type="radio" name="stnk_kondisi" value="kurang"> Kurang
                                </label>
                                <label class="form-check-label">
                                    <input type="radio" name="stnk_kondisi" value="tidak_ada"> Tidak Ada/Ada
                                </label>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-2">
                                <h6>Air Conditioner (AC)</h6>
                            </div>
                            <div class="col-md-1">
                                <h6>:</h6>
                            </div>
                            <div class="col-md-9">
                                <label class="form-check-label">
                                    <input type="radio" name="stnk_kondisi" value="baik"> Baik
                                </label>
                                <label class="form-check-label">
                                    <input type="radio" name="stnk_kondisi" value="cukup"> Cukup
                                </label>
                                <label class="form-check-label">
                                    <input type="radio" name="stnk_kondisi" value="rusak"> Rusak
                                </label>
                                <label class="form-check-label">
                                    <input type="radio" name="stnk_kondisi" value="kurang"> Kurang
                                </label>
                                <label class="form-check-label">
                                    <input type="radio" name="stnk_kondisi" value="tidak_ada"> Tidak Ada/Ada
                                </label>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-2">
                                <h6>Oli Mesin</h6>
                            </div>
                            <div class="col-md-1">
                                <h6>:</h6>
                            </div>
                            <div class="col-md-9">
                                <label class="form-check-label">
                                    <input type="radio" name="stnk_kondisi" value="baik"> Baik
                                </label>
                                <label class="form-check-label">
                                    <input type="radio" name="stnk_kondisi" value="cukup"> Cukup
                                </label>
                                <label class="form-check-label">
                                    <input type="radio" name="stnk_kondisi" value="rusak"> Rusak
                                </label>
                                <label class="form-check-label">
                                    <input type="radio" name="stnk_kondisi" value="kurang"> Kurang
                                </label>
                                <label class="form-check-label">
                                    <input type="radio" name="stnk_kondisi" value="tidak_ada"> Tidak Ada/Ada
                                </label>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-2">
                                <h6>Minyak Rem</h6>
                            </div>
                            <div class="col-md-1">
                                <h6>:</h6>
                            </div>
                            <div class="col-md-9">
                                <label class="form-check-label">
                                    <input type="radio" name="stnk_kondisi" value="baik"> Baik
                                </label>
                                <label class="form-check-label">
                                    <input type="radio" name="stnk_kondisi" value="cukup"> Cukup
                                </label>
                                <label class="form-check-label">
                                    <input type="radio" name="stnk_kondisi" value="rusak"> Rusak
                                </label>
                                <label class="form-check-label">
                                    <input type="radio" name="stnk_kondisi" value="kurang"> Kurang
                                </label>
                                <label class="form-check-label">
                                    <input type="radio" name="stnk_kondisi" value="tidak_ada"> Tidak Ada/Ada
                                </label>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-2">
                                <h6>Oli Power Steering</h6>
                            </div>
                            <div class="col-md-1">
                                <h6>:</h6>
                            </div>
                            <div class="col-md-9">
                                <label class="form-check-label">
                                    <input type="radio" name="stnk_kondisi" value="baik"> Baik
                                </label>
                                <label class="form-check-label">
                                    <input type="radio" name="stnk_kondisi" value="cukup"> Cukup
                                </label>
                                <label class="form-check-label">
                                    <input type="radio" name="stnk_kondisi" value="rusak"> Rusak
                                </label>
                                <label class="form-check-label">
                                    <input type="radio" name="stnk_kondisi" value="kurang"> Kurang
                                </label>
                                <label class="form-check-label">
                                    <input type="radio" name="stnk_kondisi" value="tidak_ada"> Tidak Ada/Ada
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
                                    </div>
                                    <div class="col-md-1">
                                        <h6>:</h6>
                                    </div>
                                    <div class="col-md-9">
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="baik"> Baik
                                        </label>
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="cukup"> Cukup
                                        </label>
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="rusak"> Rusak
                                        </label>
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="kurang"> Kurang
                                        </label>
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="tidak_ada"> Tidak Ada/Ada
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <h6>Lampu Kota</h6>
                                    </div>
                                    <div class="col-md-1">
                                        <h6>:</h6>
                                    </div>
                                    <div class="col-md-9">
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="baik"> Baik
                                        </label>
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="cukup"> Cukup
                                        </label>
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="rusak"> Rusak
                                        </label>
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="kurang"> Kurang
                                        </label>
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="tidak_ada"> Tidak Ada/Ada
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <h6>Fog Lamp</h6>
                                    </div>
                                    <div class="col-md-1">
                                        <h6>:</h6>
                                    </div>
                                    <div class="col-md-9">
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="baik"> Baik
                                        </label>
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="cukup"> Cukup
                                        </label>
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="rusak"> Rusak
                                        </label>
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="kurang"> Kurang
                                        </label>
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="tidak_ada"> Tidak Ada/Ada
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <h6>Lampu Sein</h6>
                                    </div>
                                    <div class="col-md-1">
                                        <h6>:</h6>
                                    </div>
                                    <div class="col-md-9">
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="baik"> Baik
                                        </label>
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="cukup"> Cukup
                                        </label>
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="rusak"> Rusak
                                        </label>
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="kurang"> Kurang
                                        </label>
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="tidak_ada"> Tidak Ada/Ada
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <h6>Lampu Belakang</h6>
                                    </div>
                                    <div class="col-md-1">
                                        <h6>:</h6>
                                    </div>
                                    <div class="col-md-9">
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="baik"> Baik
                                        </label>
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="cukup"> Cukup
                                        </label>
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="rusak"> Rusak
                                        </label>
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="kurang"> Kurang
                                        </label>
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="tidak_ada"> Tidak Ada/Ada
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <h6>Lampu Atret</h6>
                                    </div>
                                    <div class="col-md-1">
                                        <h6>:</h6>
                                    </div>
                                    <div class="col-md-9">
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="baik"> Baik
                                        </label>
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="cukup"> Cukup
                                        </label>
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="rusak"> Rusak
                                        </label>
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="kurang"> Kurang
                                        </label>
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="tidak_ada"> Tidak Ada/Ada
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <h6>Lampu Dalam Kabin</h6>
                                    </div>
                                    <div class="col-md-1">
                                        <h6>:</h6>
                                    </div>
                                    <div class="col-md-9">
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="baik"> Baik
                                        </label>
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="cukup"> Cukup
                                        </label>
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="rusak"> Rusak
                                        </label>
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="kurang"> Kurang
                                        </label>
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="tidak_ada"> Tidak Ada/Ada
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
                                    </div>
                                    <div class="col-md-1">
                                        <h6>:</h6>
                                    </div>
                                    <div class="col-md-9">
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="baik"> Baik
                                        </label>
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="cukup"> Cukup
                                        </label>
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="rusak"> Rusak
                                        </label>
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="kurang"> Kurang
                                        </label>
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="tidak_ada"> Tidak Ada/Ada
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <h6>Ban Serve</h6>
                                    </div>
                                    <div class="col-md-1">
                                        <h6>:</h6>
                                    </div>
                                    <div class="col-md-9">
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="baik"> Baik
                                        </label>
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="cukup"> Cukup
                                        </label>
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="rusak"> Rusak
                                        </label>
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="kurang"> Kurang
                                        </label>
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="tidak_ada"> Tidak Ada/Ada
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
                                    </div>
                                    <div class="col-md-1">
                                        <h6>:</h6>
                                    </div>
                                    <div class="col-md-9">
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="baik"> Baik
                                        </label>
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="cukup"> Cukup
                                        </label>
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="rusak"> Rusak
                                        </label>
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="kurang"> Kurang
                                        </label>
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="tidak_ada"> Tidak Ada/Ada
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <h6>Belakang</h6>
                                    </div>
                                    <div class="col-md-1">
                                        <h6>:</h6>
                                    </div>
                                    <div class="col-md-9">
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="baik"> Baik
                                        </label>
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="cukup"> Cukup
                                        </label>
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="rusak"> Rusak
                                        </label>
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="kurang"> Kurang
                                        </label>
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="tidak_ada"> Tidak Ada/Ada
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-2">
                                <h6>Suara Mesin</h6>
                            </div>
                            <div class="col-md-1">
                                <h6>:</h6>
                            </div>
                            <div class="col-md-9">
                                <label class="form-check-label">
                                    <input type="radio" name="stnk_kondisi" value="baik"> Baik
                                </label>
                                <label class="form-check-label">
                                    <input type="radio" name="stnk_kondisi" value="cukup"> Cukup
                                </label>
                                <label class="form-check-label">
                                    <input type="radio" name="stnk_kondisi" value="rusak"> Rusak
                                </label>
                                <label class="form-check-label">
                                    <input type="radio" name="stnk_kondisi" value="kurang"> Kurang
                                </label>
                                <label class="form-check-label">
                                    <input type="radio" name="stnk_kondisi" value="tidak_ada"> Tidak Ada/Ada
                                </label>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-2">
                                <h6>Rem & Hand rem</h6>
                            </div>
                            <div class="col-md-1">
                                <h6>:</h6>
                            </div>
                            <div class="col-md-9">
                                <label class="form-check-label">
                                    <input type="radio" name="stnk_kondisi" value="baik"> Baik
                                </label>
                                <label class="form-check-label">
                                    <input type="radio" name="stnk_kondisi" value="cukup"> Cukup
                                </label>
                                <label class="form-check-label">
                                    <input type="radio" name="stnk_kondisi" value="rusak"> Rusak
                                </label>
                                <label class="form-check-label">
                                    <input type="radio" name="stnk_kondisi" value="kurang"> Kurang
                                </label>
                                <label class="form-check-label">
                                    <input type="radio" name="stnk_kondisi" value="tidak_ada"> Tidak Ada/Ada
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
                                    </div>
                                    <div class="col-md-1">
                                        <h6>:</h6>
                                    </div>
                                    <div class="col-md-9">
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="baik"> Baik
                                        </label>
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="cukup"> Cukup
                                        </label>
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="rusak"> Rusak
                                        </label>
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="kurang"> Kurang
                                        </label>
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="tidak_ada"> Tidak Ada/Ada
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <h6>Dongkrak</h6>
                                    </div>
                                    <div class="col-md-1">
                                        <h6>:</h6>
                                    </div>
                                    <div class="col-md-9">
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="baik"> Baik
                                        </label>
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="cukup"> Cukup
                                        </label>
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="rusak"> Rusak
                                        </label>
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="kurang"> Kurang
                                        </label>
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="tidak_ada"> Tidak Ada/Ada
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <h6>Segitiga Pengaman</h6>
                                    </div>
                                    <div class="col-md-1">
                                        <h6>:</h6>
                                    </div>
                                    <div class="col-md-9">
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="baik"> Baik
                                        </label>
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="cukup"> Cukup
                                        </label>
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="rusak"> Rusak
                                        </label>
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="kurang"> Kurang
                                        </label>
                                        <label class="form-check-label">
                                            <input type="radio" name="stnk_kondisi" value="tidak_ada"> Tidak Ada/Ada
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
