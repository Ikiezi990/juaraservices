<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
use App\Models\Produk;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['transaksi'] = Transaksi::where('user_id', auth()->user()->id)->get();
        $data['produk'] = Produk::all();
        $data['title'] = "Form Transaksi";
        return view('user.transaksi.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'screenshoot_imei' => 'required|mimes:png,jpg,jpeg',
        ]);
        $deposit = Deposit::where(['user_id' => auth()->user()->id, 'status' => 'Success'])->sum('total_deposit');
        $transaksi = Transaksi::where(['user_id' => auth()->user()->id])->sum('total_transaksi');
        $total_saldo = $deposit - $transaksi;
        $expense = $total_saldo - $request->harga;
        if ($expense >= 0) {
            $extension = $request->file('screenshoot_imei')->getClientOriginalExtension();
            $fileName = time() . "." . $extension;
            $request->file('screenshoot_imei')->move(public_path('/screenshoot_imei'), $fileName);
            $data = [
                'user_id' => auth()->user()->id,
                'produk_id' => $request->produk_id,
                'screenshoot_imei' => $fileName,
                'tgl_transaksi' => date('Y-m-d'),
                'status' => 'Pending',
                'total_transaksi' => $request->harga,
            ];
            Transaksi::insert($data);
            alert()->success('Berhasil', 'Permintaan transaksi berhasil di kirim !');
            return redirect(route('transaksi.index'));
        } else {
            alert()->error('Gagal', 'Maaf saldo anda tidak mencukupi untuk melakukan transaksi');
            return redirect(route('transaksi.index'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
