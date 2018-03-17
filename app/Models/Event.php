<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use CrudTrait;

    protected $table = 'events';
    protected $fillable = [
        'event_key', 'date', 'url_fb', 'url_instagram', 'email'
    ];
    
    public function details()
    {
        return $this->hasMany('App\Models\EventDetails', 'event_key', 'id');
    }
}
