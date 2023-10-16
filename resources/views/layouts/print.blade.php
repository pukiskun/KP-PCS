<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    <div class="header">
        <img class="logo" src="{{ public_path('logo.png') }}" alt="Company Logo" />
        <div class="company-info">
            <h1>PT PETROKOPINDO CIPTA SELARAS</h1>
            <p>
                Jl. Raya Roomo No.242, Maduran, Roomo, Kec. Manyar,
                Kabupaten Gresik, Jawa Timur 61151
            </p>
            <p>Telepon: (031) 3984194</p>
        </div>
    </div>
    <div class="line"></div>
    <div class="container">
        <img src="data:image/png;base64, {{ base64_encode($code) }} " />
        <p>{{ $data->kode }}</p>
        <p>{{ $data->nama }}</p>
        @foreach ($items as $item)
            <p>{{ $item->kategori_nama }}</p>
        @endforeach
        @foreach ($items as $item)
            <p>{{ $item->division_nama }}</p>
        @endforeach
    </div>
</body>

</html>

<style>
    @page {
        size: A4 landscape;
    }

    .header {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center
    }

    .logo {
        height: 50;

    }

    .company-info {
        text-align: left;
    }

    .company-info h1 {
        margin: 0;
        font-size: 14px;
    }

    .company-info p {
        margin: 0;
        font-size: 11px;
    }

    .line {
        border-top: 1px solid #000;
        margin-top: 20px;
        margin-bottom: 50px
    }

    .container {
        padding: 20px;
    }
</style>
