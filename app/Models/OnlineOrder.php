<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OnlineOrder extends Model
{
    use HasFactory;
    public function package(){
        return $this->belongsTo(Package::class);
    }
    public function user(){
        return $this->belongsTo(SystemUser::class);
    }
    public function customer(){
        return $this->belongsTo(Customer::class);
    }
    public function invoice(){
        return $this->hasMany(Invoice::class);
    }
}
