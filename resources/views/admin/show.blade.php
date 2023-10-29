@extends('layouts.app')
@section('content')
    <div class="container">

        <div class="nama_box">
            <h4>Riwayat aktivitas</h4>
            <h1>{{ Auth::user()->name }}</h1>
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
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($riwayat as $item)
                    <tr>
                        <td>{{ $item->id ?: '-' }}</td>
                        <td>{{ $item->kode ?: '-' }}</td>
                        <td>{{ $item->nama ?: '-' }}</td>
                        <td>{{ $item->parent ?: '-' }}</td>
                        <td>{{ $item->created_at ?: '-' }}</td>
                        <td>{{ $item->updated_at ?: '-' }}</td>
                        <td>{{ $item->deleted_at ?: '-' }}</td>
                        @if ($item->status == 'Dibuat')
                            <td><span class="dibuat">{{ $item->status }}</span></td>
                        @elseif ($item->status == 'Disunting')
                            <td><span class="disunting">{{ $item->status }}</span></td>
                        @else
                            <td><span class="dihapus">{{ $item->status ?: '-' }}</span></td>
                        @endif
                    </tr>
                @empty
                    <tr>
                        <td colspan="8">Tidak ada data</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
