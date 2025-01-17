<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'available', //¿Lo necesitamos?
        'description',
        'assistants',
        'date',
        'img'
    ];

    public function users(){

        return $this->belongsToMany(User::class, 'event_user');
    }

}
