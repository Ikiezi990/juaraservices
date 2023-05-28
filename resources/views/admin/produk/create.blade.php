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
    <form action="{{ route('produk.store') }}" method="post">
        @csrf
        @method('POST')
        <div class="form-group">
            <label for="nama_produk" class="form-label">Nama Produk</label>
            <input type="text" name="nama_produk" id="nama_produk" class="form-control">
        </div>
        <div class="form-group">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" name="harga" id="harga" class="form-control">
        </div>
        <div class="form-group">
            <label for="type" class="form-label">Type</label>
            <select name="type" id="type" class="form-control">
                <option value="Lokal">Lokal</option>
                <option value="International">International</option>
            </select>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
</div>
@endsection