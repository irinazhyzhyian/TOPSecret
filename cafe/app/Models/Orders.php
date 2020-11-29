<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $table = 'orders';
    protected $fillable = ['order_info_id', 'item_id', 'items_count'];

    public function ordersinfo()
    {
        return $this->belongsTo('App\Models\OrdersInfo', 'order_info_id');
    }

    public function menuitems()
    {
        return $this->belongsTo('App\Models\MenuItems', 'item_id');
    }
}
