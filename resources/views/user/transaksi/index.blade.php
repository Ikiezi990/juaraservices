@extends('usertemplates.app')
@section('content')
@include('sweetalert::alert')
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
                    <select name="produk_id" id="produk" class="form-control produk">
                        <option value="">Pilih Produk ---</option>
                        @foreach($produk as $row)
                        <option value="{{ $row->id }}" onclick="fetchNominal(<?= $row->id ?>)">{{ $row->nama_produk }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Harga Produk</label>
                    <input type="text" class="form-control" id="harga" disabled>
                    <input type="hidden" name="harga" class="harga">
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
<script>
    $('.produk').on('change', function() {
        id = this.value;
        $.get(`/price/${id}`, function(data) {
            $('#harga').val(formatRupiah(data, 'Rp. '));
            $('.harga').val(data);
        });
    });
    /* Fungsi formatRupiah */
    function formatRupiah(angka, prefix) {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split = number_string.split(','),
            sisa = split[0].length % 3,
            rupiah = split[0].substr(0, sisa),
            ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        // tambahkan titik jika yang di input sudah menjadi angka ribuan
        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }

        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }
</script>
@endsection