<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Positions extends Model
{
    protected $table='positions';
    protected $fillable = ['position'];

    public function employee()
    {
        return $this->hasOne('App\Models\Employee');
    }
}
