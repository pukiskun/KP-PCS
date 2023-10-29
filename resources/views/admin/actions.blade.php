<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,
initial-scale=1.0">
    @vite('resources/sass/app.scss')
</head>

<body>
    <div class="d-flex">
        <a href="{{ route('admin.show', ['id' => $user->id]) }}" class="btn btn-primary me-2 btn-equal-width"> <i
                class="bi bi-qr-code"></i> Detail</a>
    </div>
    @vite('resources/js/app.js')
</body>

</html>
