<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Event;
use Illuminate\Support\Facades\Storage;

class eventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'event' => Event::all()
        ];
        return view('admin.event',$data);
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
        $newName = Str::random(10).'.'.$request->poster->extension();
        $request->poster->storeAs('public/img/event',$newName);

        Event::create([
            'title' => $request->title,
            'time' => $request->time,
            'poster' => $newName
        ]);

        return redirect('/a/event');
        
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
            'event' => Event::find($id)
        ];
        return view('admin.edit.event',$data);
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
        if($request->poster == null){
            $data = [
                'title' => $request->title,
                'time' => $request->time
            ];
        }else{
            $newName = Str::random(10).'.'.$request->poster->extension();
            $request->poster->storeAs('public/img/event',$newName);
            Storage::delete('/public/img/event/'.$request->lastposter);

            $data = [
                'title' => $request->title,
                'time' => $request->time,
                'poster' => $newName
            ];
        }

        Event::where('id', $id)
                ->update($data);
        
        return redirect('/a/event');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);
        Storage::delete('/public/img/event/'.$event->poster);
        $event->delete();
        return redirect('/a/event');
    }
}
