<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuItems extends Model
{
    protected $table = "menuitems";
    protected $fillable = ['name', 'price', 'description'];

    public function ingradients()
    {
        return $this->hasOne('App\Models\Ingradients');
    }

    public function orders()
    {
        return $this->hasOne('App\Models\Orders');
    }
}
