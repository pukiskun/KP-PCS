@extends('layouts.app')
@section('content')
    <div class="container mt-4">
        <div class="row mb-0">
            <div class="col-lg-9 col-xl-10">
                <h4 class="mb-3">{{ $pageTitle }}</h4>
            </div>
            <div class="col-lg-3 col-xl-2">
                <div class="d-grid gap-2">
                    <a href="{{ route('arsip.create') }}" class="btn btn-secondary">Tambah Data</a>
                </div>
            </div>
        </div>
        <div class="table-responsive border p-4 rounded-3 bg-white">
            <table class="table table-bordered table-hover table-striped mb-0 bg-white" id="checkTable">
                <thead>
                    <tr>
                        <th rowspan="2">No</th>
                        <th rowspan="2">Uraian</th>
                        <th colspan="5">Kondisi</th>
                        <th rowspan="2">Keterangan</th>
                        <th rowspan="2">Actions</th>
                    </tr>
                    <tr>
                        <th>Baik</th>
                        <th>Rusak</th>
                        <th>Cukup</th>
                        <th>Kurang</th>
                        <th>Tidak Ada</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
@endsection
