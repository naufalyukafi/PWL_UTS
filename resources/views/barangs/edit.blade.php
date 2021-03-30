@extends('barangs.layout')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Edit Barang
            </div>
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
        <form method="post" action="{{ route('barang.update', $Barang->id) }}" id="myForm">
        @csrf
        @method('PUT')
            <div class="form-group">
                <label for="kodeBarang">Kode Barang</label>
                <input type="text" name="kodeBarang" class="form-control" id="kodeBarang" value="{{$Barang->kodeBarang}}" aria-describedby="kodeBarang" >
            </div>
            <div class="form-group">
                <label for="namaBarang">Nama Barang</label>
                <input type="namaBarang" name="namaBarang" class="form-control" id="namaBarang" value={{$Barang->namaBarang}} aria-describedby="namaBarang" >
            </div>
            <div class="form-group">
                <label for="kategoriBarang">Kategori Barang</label>
                <input type="text" name="kategoriBarang" class="form-control" id="kategoriBarang" value={{$Barang->kategoriBarang}} ariadescribedby="kategoriBarang" disabled >
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="number" name="harga" class="form-control" id="harga" value={{$Barang->harga}} ariadescribedby="harga" >
            </div>
            <div class="form-group">
                <label for="qty">QTY</label>
                <input type="qty" name="qty" class="form-control" id="qty" value={{$Barang->qty}} aria-describedby="qty" >
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    </div>
    </div>
</div>
@endsection