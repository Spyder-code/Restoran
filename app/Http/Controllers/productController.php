<?php

namespace App\Http\Controllers;

use App\Product;
use App\Tran;
use App\User;
use App\Customer;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Customer $customer)
    {
        $food = Product::all()->where('kategori', '=', 1);
        $drink = Product::all()->where('kategori', '=', 2);
        $tran =  Tran::all()->where('id_customers', '=', $customer->id);
        $group = DB::select(DB::raw("SELECT nama, SUM(jumlah) as jumlah FROM `trans` where id_customers = $customer->id group by nama "));
        $price = DB::table('trans')->where('id_customers', '=', $customer->id)->sum('total');
        // dd($group);
        return view('user.index', [
            'product' => $food,
            'drink' => $drink,
            'trans' => $tran,
            'user' => $customer,
            'total' => $price,
            'group' => $group
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
