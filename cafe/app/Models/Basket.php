<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    protected $table = 'basket';
    protected $fillable = ['item_id','user_id', 'items_count'];

    public function users()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function menuitems()
    {
        return $this->belongsTo('App\Models\MenuItems', 'item_id');
    }

  
}
