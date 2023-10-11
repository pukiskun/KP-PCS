<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>
    <div class="d-flex justify-content-evenly">
        <a href="{{ route('arsip.show', ['id' => $item->id]) }}" class="btn btn-primary me-2 btn-equal-width"> <i
                class="bi bi-ticket-detailed"></i> Detail</a>
        <a href="{{ route('arsip.edit', ['id' => $item->id]) }}" class="btn btn-warning me-2 btn-equal-width"><i
                class="bi bi-pencil-square"></i> Edit</a>
    </div>
    @vite('resources/js/app.js')
</body>

</html>
