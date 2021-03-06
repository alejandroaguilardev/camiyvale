<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded=['created_at','updated_at'];

    public function getRouteKeyName(){
        return "slug";
    }

    public function category(){
        return $this->belongTo(Category::class);
    }
}
 