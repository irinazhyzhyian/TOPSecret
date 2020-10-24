<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomCoffee extends Model
{
    protected $table = "customcoffee";
    protected $fillable = ['user_id', 'name'];

    public function users()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
