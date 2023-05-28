@extends('usertemplates.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1>Form Transaksi</h1>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="{{ route('transaksi.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="form-group">
                    <label for="produk" class="form-group">Produk</label>
                    <select name="produk_id" id="produk" class="form-control">
                        <option value="">Pilih Produk ---</option>
                        @foreach($produk as $row)
                        <option value="{{ $row->id }}">{{ $row->nama_produk }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="screenshoot_imei" class="form-label">Screenshoot Imei</label>
                    <input type="file" name="screenshoot_imei" id="screenshoot_imei" class="form-control">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <h1>Bukti Transaksi</h1>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Id Transaksi</th>
                        <th>Tanggal Transaksi</th>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Bukti Transaksi</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach($transaksi as $row)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>trx{{ $row->id }}</td>
                        <td>{{ $row->tgl_transaksi }}</td>
                        <td>{{ $row->produk->nama_produk }}</td>
                        <td>{{ $row->produk->harga }}</td>
                        <td>
                            <img src="{{asset('screenshoot_imei/'. $row->screenshoot_imei) }}" height="40px" alt="">
                        </td>
                        <td>{{ $row->status }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection