<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingradients extends Model
{
    protected $table = "ingradients";
    protected $fillable = ['product_id', 'product_count'];

    public function products()
    {
        return $this->belongsTo('App\Models\Products', 'product_id');
    }

    public function menuitems()
    {
        return $this->belongsTo('App\Models\MenuItems', 'item_id');
    }

    public function customcoffee()
    {
        return $this->belongsTo('App\Models\CustomCoffee', 'custom_id');
    }
}
