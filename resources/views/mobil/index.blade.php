@extends('layouts.app')
@section('content')
    <div class="container mt-4">
        <div class="row mb-0">
            <div class="col-lg-9 col-xl-10">
                <h4 class="mb-3 text-white">{{ $pageTitle }}</h4>
            </div>
            <div class="col-lg-3 col-xl-2">
                <div class="d-grid gap-2 mb-5">
                    <a href="{{ route('mobil.create') }}" class="btn btn-secondary">Tambah Data</a>
                </div>
            </div>
        </div>

        <div class="table-responsive border p-4 rounded-3 bg-white">
            <table class="table table-bordered table-hover table-striped mt-5 bg-white" id="arsipTable">
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
                    @foreach ($items as $item)
                        <tr>
                            <td>{{ $item->nopol }}</td>
                            <td>{{ $item->merk }}</td>
                            <td>{{ $item->odo_meter }}</td>
                            <td>{{ $item->fuel }}</td>
                            <td>{{ $item->admin }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>@include('mobil.actions')</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
@push('scripts')
    <script type="module">
        $(document).ready(function() {
            $('#arsipTable').DataTable();
        });
    </script>
@endpush
