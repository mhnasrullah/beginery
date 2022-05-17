<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'time',
        'poster',
    ];

    public function user(){
        return $this->belongsToMany(User::class, 'user_events', 'event_id', 'user_id');
    }
}
