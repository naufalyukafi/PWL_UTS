@extends('barangs.layout')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
    <div class="card" style="width: 24rem;">
        <div class="card-header">Tambah Barang</div>
    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form method="post" action="{{ route('barang.store') }}" id="myForm">
    @csrf
        <div class="form-group">
            <label for="kodeBarang">Kode Barang</label>
            <input type="text" name="kodeBarang" class="form-control" id="kodeBarang" aria-describedby="kodeBarang" >
        </div>
        <div class="form-group">
            <label for="namaBarang">Nama Barang</label>
            <input type="namaBarang" name="namaBarang" class="form-control" id="namaBarang" aria-describedby="namaBarang" >
        </div>
        <div class="form-group">
            <label for="kategoriBarang">Kategori Barang</label>
            <input type="text" name="kategoriBarang" class="form-control" id="kategoriBarang" ariadescribedby="kategoriBarang" >
        </div>
        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="number" name="harga" class="form-control" id="harga" ariadescribedby="harga" >
        </div>
        <div class="form-group">
            <label for="qty">QTY</label>
            <input type="qty" name="qty" class="form-control" id="qty" aria-describedby="qty" >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
    </div>
    </div>
</div>
@endsection