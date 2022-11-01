<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $pageTitle . ' / ' . config('app.name', 'REICREATIVE') }}</title>

    <!-- Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="border-top-wide border-primary d-flex flex-column">
    <div class="page page-center">
        {{ $slot }}
    </div>
</body>

</html>
