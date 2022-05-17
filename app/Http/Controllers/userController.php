<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class userController extends Controller
{
    public function auth(){
        return view('auth');
    }

    public function reg(Request $r){
        
        User::create([
            'name' => $r->name,
            'email' => $r->email,
            'password' => bcrypt($r->password),
            'tanggal_lahir' => $r->tanggal,
            'role' => "user",
            'profesi' => $r->profesi,
            'alamat' => $r->alamat,
        ]);

        return redirect('/auth');
    }

    public function log(Request $r){
        if (Auth::attempt([
            'email' => $r->email,
            'password' => $r->password
        ])) {
            $r->session()->regenerate();
            
            return redirect('/');
            dd('login success');
        }else{
            dd('login fail');
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
