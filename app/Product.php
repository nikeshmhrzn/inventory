<?php

namespace App;
use App\Category;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'price','user_id', 'category_id'];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
