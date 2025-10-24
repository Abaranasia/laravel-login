<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'App' }}</title>
    @vite('resources/css/app.css')
    <style>
        body {
            background-color: gray;
        }
    </style>
</head>
<body>
    <main>
        {{ $slot }}
    </main>
</body>
</html>