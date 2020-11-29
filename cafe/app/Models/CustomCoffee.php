<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomCoffee extends Model
{
    protected $table = "customcoffee";
    protected $guarded = [];

    public function users()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
