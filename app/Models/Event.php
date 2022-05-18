<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Service;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'time',
        'poster',
        'service_id',
    ];

    public function user(){
        return $this->belongsToMany(User::class, 'user_events', 'event_id', 'user_id');
    }
    public function service(){
        return $this->belongsTo(Service::class, 'service_id', 'id');
    }
}
