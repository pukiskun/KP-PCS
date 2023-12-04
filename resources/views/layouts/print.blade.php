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
        <table>
            <thead>
                <tr>
                    <th rowspan="4">
                        <img src="data:image/png;base64, {{ base64_encode($code) }} " />

                    </th>
                    <th style="width: 580px">
                        <p>{{ $data->kode }}</p>

                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <p>{{ $data->nama }}</p>

                    </td>
                </tr>
                <tr>
                    <td>


                        @foreach ($items as $item)
                            <p>{{ $item->kategori_nama }}</p>
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <td>

                        @foreach ($items as $item)
                            <p>{{ $item->division_nama }}</p>
                        @endforeach

                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>

<style>
    @page {
        size: A4 landscape;
    }

    table p {
        font-size: 2rem
    }

    table,
    th,
    td {
        border: 1px solid black;
        text-align: center;
        border-collapse: collapse
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
