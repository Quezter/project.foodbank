<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    protected $fillable = ['name', 'value'];

    public function getConfigID($configName) {
        $configItem = $this->where('name', $configName)->first();

        return $configItem->id;
    }
}
