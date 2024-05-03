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
                <hr class="d-lg-none text-white-50">
                <!-- <a href="{{ route('profile') }}" class="btn btn-outlinelight my-2 ms-md-auto" style="color:white"><i class="bi-person-circle me-1"></i> My
                    Profile</a> -->
            </div>
        </div>
    </nav>
    <div class="container mt-4">
        <div class="row mb-0">
            <div class="col-lg-9 col-xl-10">
                <h4 class="mb-3">{{ $pageTitle }}</h4>
            </div>
            <div class="col-lg-3 col-xl-2">
                <div class="d-grid gap-2">
                    <a href="{{ route('listbarang.create') }}" class="btn btn-success"><i class="bi bi-cart-plus-fill"></i> Create Order</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="table-responsive border p-3 rounded-3">
            <table class="table table-bordered table-hover table-striped mb-0 bg-white">
                <thead>
                    <tr>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Harga Barang</th>
                        <th>Deskripsi Barang</th>
                        <th>Satuan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($barangs as $barang)
                    <tr>
                        <td>{{$barang->kodebarang}}</td>
                        <td>{{$barang->namabarang}}</td>
                        <td>{{$barang->hargabarang}}</td>
                        <td>{{$barang->deskripsibarang}}</td>
                        <td>{{$barang->satuan->name}}</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{ route('listbarang.show', ['listbarang' => $barang->id]) }}" class="btn btn-outline-dark btn-sm me-2"><i class="bi-person lines-fill"></i></a>
                                <a href="{{ route('listbarang.edit', ['listbarang' => $barang->id]) }}" class="btn btn-outline-dark btn-sm me-2"><i class="bi-pencil square"></i></a>
                                <div>
                                    <form action="{{route('listbarang.destroy', ['listbarang' => $barang->id]) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-outline-dark btn-sm me2"><i class="bi-trash"></i></button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
    @vite('resources/js/app.js')
</body>

</html>