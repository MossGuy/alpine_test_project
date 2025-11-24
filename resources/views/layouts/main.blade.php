<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>Alpine test project</title>
</head>
<body class="min-h-screen flex flex-col">
    <main class="flex-grow">
        @yield('content')
    </main>
</body>
</html>