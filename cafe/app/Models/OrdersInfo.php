<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrdersInfo extends Model
{
    protected $table = 'ordersinfo';
    protected $fillable = ['order_time', 'address', 'customer_name', 'phone'];

    public function orders()
    {
        return $this->hasOne('App\Models\Orders');
    }

}
