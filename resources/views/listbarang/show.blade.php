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
                    <li class="nav-item col-2 col-md-auto"><a href="{{route('home') }}" class="nav-link active" style="font-family:Verdana, Geneva, Tahoma, sans-serif">Home</a></li>
                    <li class="nav-item col-2 col-md-auto"><a href="{{route('listbarang.index') }}" class="nav-link" style="font-family:Verdana, Geneva, Tahoma, sans-serif">Shop</a></li>
                </ul>
                <hr class="d-lg-none text-white-50">
                <!-- <a href="{{ route('profile') }}" class="btn btn-outlinelight my-2 ms-md-auto" style="color:white"><i class="bi-person-circle me-1"></i> My
                    Profile</a> -->
            </div>
        </div>
    </nav>
    <div class="container-sm my-5">
        <div class="row justify-content-center">
            <div class="p-5 bg-light rounded-3 col-xl-4 border">
                <div class="mb-3 text-center">
                <i class="bi bi-bag-heart-fill fs-3"></i>
                    <h4>Detail Barang</h4>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="firstName" class="form-label">Kode Barang</label>
                        <h5>{{ $barang->kodebarang }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="lastName" class="form-label">Nama Barang</label>
                        <h5>{{ $barang->namabarang }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="email" class="formlabel">Harga Barang</label>
                        <h5>{{ $barang->hargabarang }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="age" class="form-label">Deskripsi Barang</label>
                        <h5>{{ $barang->deskripsibarang }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="age" class="formlabel">Satuan</label>
                        <h5>{{ $barang->satuan->name }}</h5>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 d-grid">
                        <a href="{{ route('listbarang.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i class="bi-arrow-left-circle me-2"></i> Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @vite('resources/js/app.js')
</body>

</html>