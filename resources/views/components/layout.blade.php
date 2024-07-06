<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>roway.vn/laravel11</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Thêm vào phần <head> của tệp Blade -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <!-- Thêm vào cuối phần <body> của tệp Blade -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

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
