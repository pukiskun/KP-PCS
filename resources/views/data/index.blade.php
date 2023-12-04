@extends('layouts.app')
@section('content')
    <div class="container mt-4">
        {{-- <div class="row mb-0">
            <div class="col-lg-9 col-xl-10">
                <h4 class="mb-3 text-white">{{ $pageTitle }}</h4>
            </div>
            <div class="col-lg-3 col-xl-2">
                <div class="d-grid gap-2">
                    <a href="{{ route('data.create') }}" class="btn btn-secondary">Tambah Data</a>
                </div>
            </div>
        </div> --}}
        <div class="row mb-4">
            <div class="col">
                <h2>{{ $pageTitle }}</h2>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row row-cols-1 row-cols-md-4 g-3">
                <div class="col">
                    <a class="linky linky-search" href="#">
                        <div class="p-3 home-box color1 text-center">
                            <p>{{ $countDok }}</p>
                            <hr>
                            <p class="fs-5"><span><i class="bi bi-file-earmark-text"></i></span> Dokumen</p>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="#" class="linky linky-search">
                        <div class="p-3 home-box color2 text-center">
                            <p>{{ $countMap }}</p>
                            <hr>
                            <p class="fs-5"><span><i class="bi bi-folder"></i></span> Map</p>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="#" class="linky linky-search">
                        <div class="p-3 home-box color3 text-center">
                            <p>{{ $countBox }}</p>
                            <hr>
                            <p class="fs-5"><span><i class="bi bi-box2"></i></span> Box</p>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a class="linky" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                        aria-controls="offcanvasExample">
                        <div class="p-3 home-box color4 text-center">
                            <p>{{ $countDiv }}</p>
                            <hr>
                            <p class="fs-5"><span><i class="bi bi-people"></i></span> Divisi</p>
                        </div>
                    </a>
                </div>
            </div>
            <hr class="my-4">
        </div>
        <div class="table-responsive border p-4 rounded-3 bg-white">
            <table class="table table-bordered table-hover table-light table-striped mb-0" id="arsipTable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Nomor Surat</th>
                        <th>Kategori</th>
                        <th>Divisi</th>
                        <th>Keterangan</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($item as $data)
                        <tr>
                            <td>{{ $data->kode }}</td>
                            <td>{{ $data->nama }}</td>
                            <td>{{ $data->nomorSurat }}</td>
                            <td>{{ $data->kategori_nama }}</td>
                            <td>{{ $data->division_nama }}</td>
                            <td>{{ $data->keterangan }}</td>
                            <td>@include('data.actions')</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Divisi</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div>
                Terdapat <b> {{ $countDiv }} Divisi </b> yang saling bersinergi, bekerjasama menyukseskan visi
                melalui misi
                Petrokopindo Cipta Selaras
            </div>
            <hr>
            <div class="boxed">
                @foreach ($divisions as $division)
                    <a href="#" id="boxy" class="boxy text-decoration-none fs-5"
                        data-bs-dismiss="offcanvas">{{ $division->nama }}</a>
                @endforeach
            </div>
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
