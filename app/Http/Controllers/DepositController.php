<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deposit;
use Illuminate\Console\View\Components\Alert;

class DepositController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['deposit'] = Deposit::where('user_id', auth()->user()->id)->get();
        $data['title'] = "Form Deposit";
        return view('user.deposit.index', $data);
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
            'bukti_deposit' => 'required|mimes:png,jpg,jpeg',
            'total_deposit' => 'required|numeric'
        ]);
        $extension = $request->file('bukti_deposit')->getClientOriginalExtension();
        $fileName = time() . "." . $extension;
        $request->file('bukti_deposit')->move(public_path('/bukti_deposit'), $fileName);
        $data = [
            'user_id' => auth()->user()->id,
            'tanggal_deposit' => date('Y-m-d'),
            'bukti_deposit' => $fileName,
            'total_deposit' => $request->total_deposit,
            'status' => 'Pending',
        ];
        Deposit::insert($data);
        alert()->success('Berhasil', 'Permintaan deposit anda berhasil di kirim !');

        return redirect(route('deposit.index'));
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
