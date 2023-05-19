<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function payment()
    {
        return $this->belongsTo('App\Models\Payment');
    }

    public function customer()
    {
        return $this->belongsTo('App\Models\Customer');
    }


}
