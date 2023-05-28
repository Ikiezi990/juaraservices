<?php

namespace App\Http\Controllers;

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
        $extension = $request->file('screenshoot_imei')->getClientOriginalExtension();
        $fileName = time() . "." . $extension;
        $request->file('screenshoot_imei')->move(public_path('/screenshoot_imei'), $fileName);
        $data = [
            'user_id' => auth()->user()->id,
            'produk_id' => $request->produk_id,
            'screenshoot_imei' => $fileName,
            'tgl_transaksi' => date('Y-m-d'),
            'status' => 'Pending',
        ];
        Transaksi::insert($data);
        return redirect(route('transaksi.index'));
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
