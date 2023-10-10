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
        <table class="table table table-striped table-success table-hover mt-5">
            <thead>
                <tr>
                    <th>Nopol</th>
                    <th>Merk</th>
                    <th>Odo Meter</th>
                    <th>Fuel</th>
                    <th>Admin</th>
                    <th>Tanggal Masuk</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($items as $item)
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                @empty
                    <tr>
                        <td>Tidak ada data</td>
                    </tr>
                @endforelse
                <tr>
                    <td>asd</td>
                    <td>asd</td>
                    <td>asd</td>
                    <td>asd</td>
                    <td>asd</td>
                    <td>asd</td>
                    <td>asd</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
