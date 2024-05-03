<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <title>{{ $pageTitle }}</title>
    @vite('resources/sass/app.scss')
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-success">
        <div class="container">
            <a href="{{ route('home') }}" class="navbar-brand mb-0 h1" style="font-family:Verdana, Geneva, Tahoma, sans-serif"><i class="bi bi-shop"></i> Master Barang</a>
            <button type="button" class="navbar-toggler" data-bstoggle="collapse" data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <hr class="d-lg-none text-white-50">
                <ul class="navbar-nav flex-row flex-wrap">
                    <li class="nav-item col-2 col-md-auto"><a href="{{
route('home') }}" class="nav-link active" style="font-family:Verdana, Geneva, Tahoma, sans-serif">Home</a></li>
                    <li class="nav-item col-2 col-md-auto"><a href="{{
route('listbarang.index') }}" class="nav-link" style="font-family:Verdana, Geneva, Tahoma, sans-serif">Shop</a></li>
                </ul>
                <!-- <hr class="d-lg-none text-white-50">
                <a href="{{ route('profile') }}" class="btn btn-outlinelight my-2 ms-md-auto" style="color:white"><i class="bi-person-circle me-1"></i> My
                    Profile</a> -->
            </div>
        </div>
    </nav>
    <div class="container mt-4">
    <h4> {{ $pageTitle }}</h4>
        <hr>
        <!-- <div class="d-flex align-items-center py-2 px-4 bg-light rounded3 border"> -->
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-body" style="background-color:lightgreen">
                            <div class="mb-3 text-center">
                                <i class="bi-person-circle fs-1"></i>
                                <h4 style="font-family:Verdana, Geneva, Tahoma, sans-serif; font-weight:bold"   >DATA MAHASISWA</h4>
                            </div>
                            <ul class="list-group">
                                <li class="list-group-item" style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; font-weight: bold; text-align:center">NAMA : Alifia Chandra D R</li>
                                <li class="list-group-item" style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; font-weight: bold; text-align:center">NIM : 1204220067</li>
                                <li class="list-group-item" style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; font-weight: bold; text-align:center">KELAS : IS-05-02</li>
                                <li class="list-group-item" style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; font-weight: bold; text-align:center">JURUSAN : Sistem Informasi</li>
                                <li class="list-group-item" style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; font-weight: bold; text-align:center">SEMESTER: 4</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @vite('resources/js/app.js')
</body>

</html>