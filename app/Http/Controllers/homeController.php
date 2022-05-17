<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Storage;

class homeController extends Controller
{
    public function index(){
        $data = [
            'event' => Event::all()
        ];
        return view('homepage',$data);
    }

    public function detailTitle($title){
        // dd(Event::where('title',$title)->first());

        $data = [
            'event' => Event::where('title',$title)->first()
        ];
        return view('detail-event',$data);
    }
}
