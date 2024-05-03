<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <title>Home</title>
    @vite('resources/sass/app.scss')
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <!-- Custom CSS -->
    <style>
        body {
            background-color: green;
        }

        .container {
            margin-top: 50px;
        }
    </style>
</head>

<body>
    <div class="container text-center my-5">
        <h1 class="mb-4" style="font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; color:white">Welcome !!!</h1>
        {{-- Contoh cara mereferensikan gambar di dalam file blade dengan
menggunakan pendekatan Vite --}}
        <img class="img-thumbnail" src="{{
Vite::asset('resources/images/software-kasir.jpg') }}" alt="image" style="width: 700px;">
        <div class="col-md-2 offset-md-5 mt-4">
            <div class="d-grid gap-2">
                <a class="btn btn-light" href="{{ route('home') }}" style="color: black; font-weight:bold">Home</a>
            </div>
        </div>
    </div>
    @vite('resources/js/app.js')

</body>

</html>