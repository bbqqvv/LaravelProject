<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 11 Tutorial</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    @vite('resources/css/app.css')
</head>
<body class=" bg-slate-100 dark:bg-slate-800">
    <div class="relative">
    <x-navbar />
    @if (session('message'))
        <div class="p-4 mb-4 mt-6 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
            role="alert">
            <span class="font-medium">{{ session('message') }}</span>
        </div>
    @endif
    <div class="mx-auto bg-colorbg relative">
        {{ $slot }}
    </div>
    <x-footer />
    </div>
</div>
</body>

</html>
