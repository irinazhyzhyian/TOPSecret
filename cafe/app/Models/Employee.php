<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = "employee";
    protected $fillable = ['first_name', 'last_name', 'position_id'];

    public function positions()
    {
        return $this->belongsTo('App\Models\Positions', 'position_id');
    }
}
