<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Initiative extends Model
{
    use CrudTrait;
    
    protected $table = 'initiatives';
    protected $fillable = ['initiative_key', 'pic_url'];
    
    public function details()
    {
        return $this->hasMany('App\Models\InitiativeDetails', 'initiative_key', 'id');
    }
}
