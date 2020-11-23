<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrdersInfo extends Model
{
    protected $table = 'ordersinfo';
    protected $fillable = ['order_time', 'address', 'user_id', 'customer_name', 'phone'];

    public function orders()
    {
        return $this->hasOne('App\Models\Orders');
    }

    public function users()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
