@extends('layouts.app')

@section('content')
    <div class="container-sm mt-5">
        <form action="{{ route('data.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row justify-content-center">
                <div class="p-5 bg-light rounded-3 border col-xl-12">
                    <div class="mb-3 text-center">
                        <i class="bi bi-file-text-fill fs-1"></i>
                        <h4>Masukkan Data</h4>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12 mb-3 ">
                            <label for="nama" class="form-label">Nama Data</label>
                            <input class="form-control @error('nama')
        is-invalid @enderror" type="text"
                                name="nama" id="nama" value="{{ old('nama') }}" placeholder="Masukkan Nama Data">
                            @error('nama')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="nomorSurat" class="form-label">Nomor Surat</label>
                            <input class="form-control @error('nomorSurat')
        is-invalid @enderror" type="text"
                                name="nomorSurat" id="nomorSurat" value="{{ old('nomorSurat') }}"
                                placeholder="Masukkan Nomor Surat">
                            @error('nomorSurat')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="divisi" class="form-label">Divisi</label>
                            <select name="divisi" id="divisi" class="form-select" aria-label="Default select example">
                                <option value="">Pilih Divisi</option>
                                @foreach ($divisions as $division)
                                    <option value="{{ $division->id }}"
                                        {{ old('division') == $division->id ? 'selected' : '' }}>{{ $division->nama }}
                                    </option>
                                @endforeach
                            </select>
                            @error('divisi')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="kategori" class="form-label">Kategori</label>
                            <select name="kategori" id="kategori" class="form-select" aria-label="Default select example">
                                <option value="">Pilih Kategori</option>
                                @foreach ($kategoris as $kategori)
                                    <option value="{{ $kategori->id }}"
                                        {{ old('kategori') == $kategori->id ? 'selected' : '' }}>
                                        {{ $kategori->nama }}
                                    </option>
                                @endforeach
                            </select>
                            @error('kategori')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>

                        {{-- BOX --}}
                        <div class="col-md-12 mb-3" id="parent-box" style="display: none">
                            <label for="parent" class="form-label">Box</label>
                            <select name="parent" class="form-select" aria-label="Default select example">
                                <option value="">--Pilih Box--</option>
                                @foreach ($boxes as $box)
                                    <option value="{{ $box->kode }}">
                                        {{ $box->kode . ' - ' . $box->nama }}
                                    </option>
                                @endforeach
                            </select>
                            @error('kategori')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        {{-- !BOX --}}

                        {{-- MAP --}}
                        <div class="col-md-12 mb-3"id="parent-map" style="display: none">
                            <label for="parent" class="form-label">Map</label>
                            <select name="parent" class="form-select" aria-label="Default select example">
                                <option value="">--Pilih Map--</option>
                                @foreach ($maps as $map)
                                    <option value="{{ $map->kode }}">
                                        {{ $map->kode . ' - ' . $map->nama }}
                                    </option>
                                @endforeach
                            </select>
                            @error('kategori')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        {{-- !MAP --}}

                        <div class="col-md-12 mb-3">
                            <label for="keterangan" class="form-label">Keterangan</label>
                            <textarea id="keterangan" name="keterangan" class="form-control" rows="5" value="{{ old('keterangan') }}"
                                placeholder="Masukkan Keterangan"></textarea>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6 d-grid">
                                <a href="{{ url('data') }}" class="btn btn-outline-dark btn-lg mt-3"><i
                                        class="bi-arrow-left-circle me-2"></i>Cancel</a>
                            </div>
                            <div class="col-md-6 d-grid">
                                <button type="submit" class="btn btn-dark btn-lg
        mt-3"><i
                                        class="bi-check-circle me-2"></i> Save</button>
                            </div>
                        </div>
                    </div>
                </div>
        </form>
    </div>
@endsection
