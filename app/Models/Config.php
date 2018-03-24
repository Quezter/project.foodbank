<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    use CrudTrait;
    
    protected $table = 'configs';
    protected $fillable = ['name', 'value'];

    public function getConfigID($configName) {
        $configItem = $this->where('name', $configName)->first();

        return $configItem->id;
    }
}
