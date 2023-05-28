@extends('admintemplates.app')

@section('content')
<div class="container">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{ route('produk.update', $data->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama_produk" class="form-label">Nama Produk</label>
            <input type="text" name="nama_produk" value="{{ $data->nama_produk }}" id="nama_produk" class="form-control">
        </div>
        <div class="form-group">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" name="harga" value="{{ $data->harga }}" id="harga" class="form-control">
        </div>
        <div class="form-group">
            <label for="type" class="form-label">Type</label>
            <select name="type" id="type" class="form-control">
                <option value="Lokal" @if($data->type=="Lokal") selected @endif>Lokal</option>
                <option value="International" @if($data->type=="International") selected @endif>International</option>
            </select>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-warning">Update</button>
        </div>
    </form>
</div>
@endsection