@php
    $currentRouteName = Route::currentRouteName();
@endphp
<nav class="navbar navbar-expand-md navbar-light bg-white">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}"><img class="img-thumbnail"
                src="{{ Vite::asset('resources/images/logo.png') }}" alt="logo petrokopindo"></a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('home') }}"
                        @if ($currentRouteName == 'home') active @endif>Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('data.index') }}"
                        @if ($currentRouteName == 'data.index') active @endif>Data</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('mobil.index') }}"
                        @if ($currentRouteName == 'mobil.index') active @endif>Pemeriksaan Kendaraan</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false"><i class="bi-person-circle me-1"></i>
                        Administrator</a>

                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('profile') }}"><i class="bi bi-person-fill"></i> My
                                Profile</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item text-danger" href="#"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="bi bi-lock-fill"></i> {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
