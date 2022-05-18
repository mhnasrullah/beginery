<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Service;
use App\Models\User;
use App\Models\UserEvent;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class homeController extends Controller
{
    public function index(){
        // dd(Auth::user());
        $data = [
            'event' => Event::select("*")->orderByDesc('created_at')->paginate(4,['*'],'events'),
            'service' => Service::select("*")->orderByDesc('created_at')->paginate(4,['*'],'services')
        ];
        return view('homepage',$data);
    }

    public function detailTitle($title){
        $event = Event::where('title',str_replace('__',' ',$title))->first();
        $user = User::find(Auth::id());

        $joined = false;
        if(Auth::user() != null){
            foreach ($user->event as $e) {
                if($e->pivot->event_id == $event->id){
                    $joined = true;
                }
            }
        }
        
        $data = [
            'event' => $event,
            'join' => $joined
        ];
        return view('detail-event',$data);
    }

    public function join($title)
    {
        $event = Event::where('title',str_replace('__',' ',$title))->first();
        $user = Auth::id();
        
        UserEvent::create([
            'user_id' => $user,
            'event_id' => $event->id
        ]);

        return redirect('/event/'.str_replace(' ','__',$title));
    }

    public function eventService($id){
        $data = [
            'event' => Event::where('service_id',$id)->get(),
            'service' => Service::find($id)
        ];
        return view('event-by-service',$data);
        // dd($data);
    }
}
