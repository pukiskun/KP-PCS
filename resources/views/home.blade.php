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
                    <th>Kode</th>
                    <th>Nama Item</th>
                    <th>Tersimpan di</th>
                    <th>Tanggal Dibuat</th>
                    <th>Tanggal Disunting</th>
                    <th>Tanggal Dihapus</th>
                    <th>Admin</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($riwayats->sortByDesc('id')->take(25) as $index => $riwayat)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $riwayat->kode ?: '-' }}</td>
                        <td>{{ $riwayat->nama ?: '-' }}</td>
                        <td>{{ $riwayat->parent ?: '-' }}</td>
                        <td>{{ $riwayat->created_at ?: '-' }}</td>
                        <td>{{ $riwayat->updated_at ?: '-' }}</td>
                        <td>{{ $riwayat->deleted_at ?: '-' }}</td>
                        <td>{{ $riwayat->admin ?: '-' }}</td>
                        @if ($riwayat->status == 'Dibuat')
                            <td><span class="dibuat">{{ $riwayat->status }}</span></td>
                        @elseif ($riwayat->status == 'Disunting')
                            <td><span class="disunting">{{ $riwayat->status }}</span></td>
                        @else
                            <td><span class="dihapus">{{ $riwayat->status ?: '-' }}</span></td>
                        @endif
                    </tr>
                @empty
                    <tr>

                        <th colspan="9">Tidak Ada Data</th>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
