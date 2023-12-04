@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="nama_box text-end text-white">
            <h4>Selamat datang</h4>
            <h1>Halo, {{ Auth::user()->name }}</h1>
        </div>
        <h4 class="text-start text-white">Riwayat dokumen</h4>
        <hr class="my-4">
        <div class="table-responsive border p-4 rounded-3 bg-white">
            <table class="table table-striped table-light table-hover" id="riwayatDokumen">
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
                    @forelse ($riwayats->sortByDesc('id')->take(15) as $index => $riwayat)
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
        <hr>
        <div class="nama_box">
            <h4 class="text-start text-white">Riwayat mobil masuk</h4>
            <hr class="">
        </div>
        <div class="table-responsive border p-4 rounded-3 bg-white">
            <table class="table table-striped table-light table-hover" id="riwayatMobil">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nopol</th>
                        <th>Merk</th>
                        <th>Odo Meter</th>
                        <th>Bensin</th>
                        <th>Tanggal Dibuat</th>
                        <th>Tanggal Disunting</th>
                        <th>Tanggal Dihapus</th>
                        <th>Admin</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($riwayat_mobil->sortByDesc('id')->take(15) as $index => $mobil)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $mobil->nopol ?: '-' }}</td>
                            <td>{{ $mobil->merk ?: '-' }}</td>
                            <td>{{ $mobil->odo_meter ?: '-' }}</td>
                            <td>{{ $mobil->fuel ?: '-' }}</td>
                            <td>{{ $mobil->created_at ?: '-' }}</td>
                            <td>{{ $mobil->updated_at ?: '-' }}</td>
                            <td>{{ $mobil->deleted_at ?: '-' }}</td>
                            <td>{{ $mobil->admin ?: '-' }}</td>
                            @if ($mobil->status == 'Dibuat')
                                <td><span class="dibuat">{{ $mobil->status }}</span></td>
                            @elseif ($mobil->status == 'Disunting')
                                <td><span class="disunting">{{ $mobil->status }}</span></td>
                            @else
                                <td><span class="dihapus">{{ $mobil->status ?: '-' }}</span></td>
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
    </div>
@endsection
@push('scripts')
    <script type="module">
        $(document).ready(function() {
            $('#riwayatDokumen').DataTable();
        });
        $(document).ready(function() {
            $('#riwayatMobil').DataTable();
        });
    </script>
@endpush
