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
    <div class="container-sm mt-5">
        <form action="{{route('listbarang.update', ['listbarang' => $barang->id]) }}" method="POST">
            @csrf
            @method('put')
            <div class="row justify-content-center">
                <div class="p-5 bg-light rounded-3 border col-xl-6">
                    @if ($errors->any())
                    @foreach ($errors->all() as $error)
                    <div class="alert alert-danger alertdismissible fade show">
                        {{ $error }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endforeach
                    @endif
                    <div class="mb-3 text-center">
                    <i class="bi bi-bag-heart-fill fs-1"></i>
                        <h4>Edit Order</h4>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="kodebarang" class="form-label">Kode Barang</label>
                            <input class="form-control" type="text" name="kodebarang" id="kodebarang" value="{{ $barang->kodebarang}}" placeholder="Enter Kode Barang">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="namabarang" class="form-label">Nama Barang</label>
                            <input class="form-control" type="text" name="namabarang" id="namabarang" value="{{ $barang->namabarang}}" placeholder="Enter Nama Barang">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="hargabarang" class="formlabel">Harga Barang</label>
                            <input class="form-control" type="text" name="hargabarang" id="hargabarang" value="{{ $barang->hargabarang}}" placeholder="Enter Harga Barang">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="deskripsibarang" class="form-label">Deskripsi Barang</label>
                            <input class="form-control" type="text" name="deskripsibarang" id="deskripsibarang" value="{{ $barang->deskripsibarang}}" placeholder="Enter Deskripsi Barang">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="satuan" class="form-label">Satuan</label>
                            <select name="satuan" id="satuan" class="form-select">
                                @php
                                $selected = '';
                                if ($errors->any()){
                                    $selected = old('satuan');
                                }else{
                                    $selected = $barang->satuan_id;
                                }
                                @foreach ($satuans as $satuan)
                                <option value="{{ $satuan->id }}" {{ old('satuan') == $satuan->id ? 'selected' : '' }}>{{ $satuan->code.' - '.$satuan->name }}</option>
                                @endforeach
                            </select>
                            @error('satuan')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 d-grid">
                            <a href="{{ route('listbarang.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i class="bi-arrow-left-circle me-2"></i> Cancel</a>
                        </div>
                        <div class="col-md-6 d-grid">
                            <button type="submit" class="btn btn-dark btn-lg mt-3"><i class="bi-check-circle me-2"></i> Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    @vite('resources/js/app.js')
</body>

</html