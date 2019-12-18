<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tran;
use App\Customer;
use App\Message;
use Illuminate\support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = Tran::all();
        $cus = Customer::all();
        return view('admin.transaksi', compact('data', 'cus'));
    }
    public function confirm(Customer $customer)
    {

        $tran =  Tran::all()->where('id_customers', '=', $customer->id);
        $price = DB::table('trans')->where('id_customers', '=', $customer->id)->sum('total');
        $cus = $customer;
        return view('admin.confirm', [
            'trans' => $tran,
            'total' => $price,
            'user' => $cus
        ]);
    }

    public function dapur()
    {
        $trans = Tran::all();
        return view('admin.dapur', compact('trans'));
    }
    public function customer()
    {
        $mes = Message::all();
        return view('admin.customer', compact('mes'));
    }
    public function update(Request $request, Tran $tran)
    {
        Tran::where('id', $tran->id)
            ->update([
                'status' => 1
            ]);
        return redirect('/admin');
    }
    public function updateUser(Request $request, Customer $customer)
    {
        $price = DB::table('trans')->where('id_customers', '=', $customer->id)->sum('total');
        $request->validate([
            'bayar' => 'required|numeric'
        ]);
        Customer::where('id', $customer->id)
            ->update([
                'uang' => $request->bayar,
                'kembalian' => $request->bayar - $price,
                'status' => 1
            ]);
        return redirect($customer->id . '/confirm');
    }
    public function print(Customer $customer)
    {

        $trans =  Tran::all()->where('id_customers', '=', $customer->id);
        $total = DB::table('trans')->where('id_customers', '=', $customer->id)->sum('total');
        $user = $customer;
        return view('admin.tambah', compact('trans', 'total', 'user'));
        return redirect($customer->id . '/confirm');
    }
    public function detail(Customer $customer)
    {

        $trans =  Tran::all()->where('id_customers', '=', $customer->id);
        $total = DB::table('trans')->where('id_customers', '=', $customer->id)->sum('total');
        $user = $customer;
        return view('admin.detail', compact('trans', 'total', 'user'));
    }
    public function antrian(Request $request)
    {

        $trans =  Customer::all()->where('id', '=', $request->cari);
        return view('admin.transaksiAntrian', compact('trans'));
    }
}
