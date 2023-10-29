@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="nama_box">
            <h4>Selamat datang</h4>
            <h1>Halo, Admin 1</h1>
        </div>
        <hr class="my-4">
        <table class="table table-striped table-success table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Jenis Kelamin</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users->sortBy('id') as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->jenisKelamin }}</td>
                        <td>@include('admin.actions')</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">Tidak ada data tersimpan</td>
                    </tr>
                @endforelse
            </tbody>

        </table>
    </div>
@endsection
