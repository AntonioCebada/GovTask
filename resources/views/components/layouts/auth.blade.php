<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Titulo dinamico -->
    <title>GovTask | {{$title ?? ''}}</title>
    <!-- Metas dinamicas -->
    {{$head ?? ''}}
    <!-- CSS base -->
    @vite(['resources/css/app.css'])
</head>
<body>
    <main>
        {{ $slot }}
    </main>
    {{ $scripts ?? '' }}
</body>
</html>