<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class EventDetails extends Model
{
    use CrudTrait;
    
    protected $table = 'event_details';
    protected $fillable = [
        'event_key', 'title', 'body', 'location', 'lang'
    ];
    
    public function event()
    {
        return $this->belongsTo('App\Models\Event', 'event_key', 'id');
    }
}
