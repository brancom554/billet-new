<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favori extends Model
{
    protected $fillable = [
        'event_id', 'user_id'   
    ];


    public function events()
    {
        return $this->belongsTo(Event::class, 'event_id');
    }
}
