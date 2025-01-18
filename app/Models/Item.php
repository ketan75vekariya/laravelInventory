<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    public function brand(){
        return $this->belongsTo(Brand::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function image(){
        return $this->hasMany(Image::class);
    }
    public function unit(){
        return $this->hasMany(Unit::class);
    }
    public function supplier(){
        return $this->belongsToMany(Supplier::class);
    }
    public function warehouse(){
        return $this->belongsToMany(Warehouse::class);
    }
    public function manufacture(){
        return $this->hasOne(Manufacture::class);
    }
    
}
