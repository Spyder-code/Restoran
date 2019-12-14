<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Product;
use Illuminate\Http\Request;
use App\Tran;
use Illuminate\support\Facades\DB;

class tranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Customer $customer)
    {
        $tra =  Tran::all()->where('id_customers', '=', $customer->id);
        $price = DB::table('trans')->where('id_customers', '=', $customer->id)->sum('total');
        return view('user.confirm', [
            'trans' => $tra,
            'user' => $customer,
            'total' => $price
        ]);
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
    public function store(Request $request, Tran $tran)
    {
        if ($request->jumlah > 0) {
            $menu = new Tran;
            $menu->id_customers = $request->user;
            $menu->nama = $request->nama;
            $menu->jumlah = $request->jumlah;
            $menu->harga = $request->harga;
            $menu->total = $request->jumlah * $request->harga;
            $menu->status = 0;
            $menu->save();
            Product::where('nama', $request->nama)
                ->update([
                    'rating' => $request->rating + $request->jumlah
                ]);
            return redirect('/index/' . $request->user);
        }
        return redirect('/index/' . $request->user);
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
    public function destroy(Request $request, Tran $tran)
    {
        $id = $request->user;
        Tran::destroy($tran->id);
        return redirect('index/' . $id);
    }
}
