<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Message;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Collection;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer = customer::all();
        return view('user.login', ['customer' => $customer]);
    }
    public function help()
    {

        return view('user.help');
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

        $menu = new Customer;
        $menu->user = $request->user;
        $menu->status = 0;
        $request->validate([
            'user' => 'required|alpha'
        ]);

        $menu->save();

        $id = $menu->id;
        return redirect('/index/' . $id);
    }

    public function storeHelp(Request $request)
    {
        $data = new Message;
        $data->email = $request->email;
        $data->subjek = $request->subjek;
        $data->pesan = $request->pesan;
        $request->validate([
            'email' => 'required',
            'subjek' => 'required',
            'pesan' => 'required'
        ]);
        $data->save();
        return redirect('/customer-servis')->with('status', 'Pesan berhasil terkirim!');
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
