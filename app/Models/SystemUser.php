<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SystemUser extends Model
{
    use HasFactory;
    public function role(){
        return $this->belongsTo(SystemUserRole::class);
    }
    public function company(){
        return $this->belongsTo(Company::class);
    }
    public function onlineOrder(){
        return $this->hasMany(OnlineOrder::class);
    }
    public function poslineOrder(){
        return $this->hasMany(PoslineOrder::class);
    }
}
