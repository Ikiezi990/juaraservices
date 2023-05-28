@extends('usertemplates.app')
@section('content')
<h1>Total Saldo</h1>
<h4>Rp. {{ number_format( $total_saldo) }};</h4>
<a href="{{ route('transaksi.index') }}" class="btn btn-primary">Transaksi</a>
<a href="{{ route('deposit.index') }}" class="btn btn-primary">Deposit</a>
@endsection