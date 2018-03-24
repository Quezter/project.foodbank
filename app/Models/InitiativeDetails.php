<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class InitiativeDetails extends Model
{
    use CrudTrait;
    
    protected $table = 'initiative_details';
    protected $fillable = [
        'initiative_key', 'lang', 'title', 'body'
    ];
    
    public function initiative()
    {
        return $this->belongsTo('App\Models\Initiative', 'initiative_key', 'id');
    }
}
