<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Login;
use Auth;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.register');
    }

    public function login()
    {
        return view('admin.login');
    }

    public function dapur(Request $request)
    {
        // Validate the form data
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required'
        ]);
        // Attempt to log the user in
        // Passwordnya pake bcrypt
        if (Auth::guard('login')->attempt(['username' => $request->username, 'password' => $request->password])) {
            return view('admin.dapur');
        } else {
            echo "login gagal";
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }
    public function store(Request $request)
    {
        $hash = Hash::make($request->password);
        $data = new Login;
        $data->nama = $request->nama;
        $data->username = $request->username;
        $data->password = $hash;
        $request->validate([
            'nama' => 'required',
            'username' => 'required',
            'password' => 'required'
        ]);
        $data->save();
        return redirect('/login');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
