<?php

namespace App\Models\Client;

use Illuminate\Database\Eloquent\Model;
use Freshwork\ChileanBundle\Rut;

class Client extends  Model
{
    public function getRutFormatedAttribute() {
      return Rut::set($this->rut)->fix()->format(); 
    }

    public function orders() {
      return $this->hasMany('App\Models\Client\Order');
    }

}
