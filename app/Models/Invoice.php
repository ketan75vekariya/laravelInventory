<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    public function onlineOrder(){
        return $this->belongsTo(OnlineOrder::class);
    }
    public function poslineOrder(){
        return $this->belongsTo(PoslineOrder::class);
    }
}
