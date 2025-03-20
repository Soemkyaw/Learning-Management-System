<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>LMS</title>
</head>

<body>
    <x-navbar></x-navbar>
    <main class="  bg-gray-100 py-10">
        <div class="max-w-[1200px] mx-auto">
            {{ $slot }}
        </div>
    </main>
</body>

</html>
