<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Service;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class serviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'service' => Service::all()
        ];
        return view('admin.service',$data);
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
        $newName = Str::random(10).'.'.$request->gambar->extension();
        $request->gambar->storeAs('public/img/service',$newName);

        Service::create([
            'nama' => $request->nama,
            'gambar' => $newName
        ]);

        return redirect('/a/service');
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
        $data = [
            'service' => Service::find($id)
        ];

        return view('admin.edit.service',$data);
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
        if($request->gambar == null){
            $data = [
                'nama' => $request->nama
            ];
        }else{
            $newName = Str::random(10).'.'.$request->gambar->extension();
            $request->gambar->storeAs('public/img/service',$newName);
            Storage::delete('/public/img/service/'.$request->lastgambar);

            $data = [
                'nama' => $request->nama,
                'gambar' => $newName
            ];
        }

        Service::where('id', $id)
                ->update($data);
        
        return redirect('/a/service');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::find($id);
        Storage::delete('/public/img/service/'.$service->gambar);
        $service->delete();
        return redirect('/a/service');
    }
}
