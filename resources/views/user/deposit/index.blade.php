@extends('usertemplates.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1>Form Deposit</h1>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="{{ route('deposit.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="form-group">
                    <label for="total_deposit" class="form-group">Total Deposit</label>
                    <input type="text" name="total_deposit" id="total_deposit" class="form-control">
                </div>
                <div class="form-group">
                    <label for="bukti_deposit" class="form-label">Bukti Deposit</label>
                    <input type="file" name="bukti_deposit" id="bukti_deposit" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <h1>Riwayat Deposit</h1>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Id Deposit</th>
                        <th>Tanggal Deposit</th>
                        <th>Bukti Deposit</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach($deposit as $row)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>trx{{ $row->id }}</td>
                        <td>{{ $row->tanggal_deposit }}</td>
                        <td>
                            <img src="{{asset('bukti_deposit/'. $row->bukti_deposit) }}" height="40px" alt="">
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