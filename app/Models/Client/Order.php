<?php

namespace App\Models\Client;

use Illuminate\Database\Eloquent\Model;

class Order extends  Model
{
    public function client() {
        return $this->belongsTo('App\Models\Client\Client');
    }
}
