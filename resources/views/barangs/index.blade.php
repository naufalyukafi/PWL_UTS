@extends('barangs.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-3">
                <h2>CRUD BARANG</h2>
            </div>
            <div class="float-right my-3">
                <div class="row ">
                    <div class="col-sm-auto"><a class="btn btn-success" href="{{ route('barang.create') }}"> Input Mahasiswa</a></div>
                </div>    
            </div>
            <div>
                <form class="input-group" action="{{ route('barang.index') }}" method="GET">
                    <input type="text" class="form-control" name="search" placeholder="Search by nama_barang">
                </form>
            </div>
        </div>
    </div>
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
<table class="table table-bordered">
<tr>
    <th>id_barang</th>
    <th>kode_barang</th>
    <th>nama_barang</th>
    <th>kategori_barang</th>
    <th>harga</th>
    <th>qty</th>
    <th width="280px">Action</th>
</tr>

@if (count($posts) > 0)
    @foreach ($posts as $barang)
    <tr>
        <td>{{ $barang->id }}</td>
        <td>{{ $barang->kodeBarang }}</td>
        <td>{{ $barang->namaBarang }}</td>
        <td>{{ $barang->kategoriBarang }}</td>
        <td>{{ $barang->harga }}</td>
        <td>{{ $barang->qty }}</td>
        <td>
            <form action="{{ route('barang.destroy', $barang->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('barang.show',$barang->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('barang.edit',$barang->id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    
    @endforeach
@else
 <h4 class="text-danger">*User Not Found</h4>   
@endif

</table>
<div class="d-flex float-right">
    {{$posts->links('pagination::bootstrap-4')}}
</div>
@endsection