<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class homeController extends Controller
{
    public function index(){
        // dd(Auth::user());
        $data = [
            'event' => Event::all()
        ];
        return view('homepage',$data);
    }

    public function detailTitle($title){
        $data = [
            'event' => Event::where('title',$title)->first()
        ];
        return view('detail-event',$data);
    }
}
