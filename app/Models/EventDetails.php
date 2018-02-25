<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class EventDetails extends Model
{
    use CrudTrait;
    
    protected $table = 'event_details';
    protected $fillable = [
      'title', 'body', 'location'
    ];
    
    public function event()
    {
        return $this->belongsTo('App\Models\Event');
    }
}
