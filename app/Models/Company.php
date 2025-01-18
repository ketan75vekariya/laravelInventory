<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    public function address(){
        return $this->hasMany(Address::class);
    }
    public function phone(){
        return $this->hasMany(Phone::class);
    }
    public function warehouse(){
        return $this->hasMany(Warehouse::class);
    }
    public function customer(){
        return $this->belongsToMany(Customer::class);
    }
    public function user(){
        return $this->hasMany(SystemUser::class);
    }
}
