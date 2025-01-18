<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    public function shipment(){
        return $this->belongsTo(Shipment::class);
    }
    public function onlineOrder(){
        return $this->hasOne(OnlineOrder::class);
    }
}
