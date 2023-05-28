@extends('admintemplates.app')

@section('content')
<div class="container">
    <h4>{{ $title }}</h4>
    <a href="{{ route('produk.create') }}" class="btn btn-primary">Tambah</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Id Produk</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Type</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php
            $no = 1;
            @endphp
            @foreach($produk as $row)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $row->id }}</td>
                <td>{{ $row->nama_produk }}</td>
                <td>Rp. {{ number_format( $row->harga )}};</td>
                <td>{{ $row->type }}</td>
                <td>
                    <a href="{{ route('produk.edit', $row->id) }}" class="btn btn-success">Edit</a>
                    <form action="{{ route('produk.destroy', $row->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection