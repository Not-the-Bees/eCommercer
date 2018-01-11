<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = array('name', 'description', 'img', 'price', 'qte', 'category_id', 'rating');

    public function category() {
        return $this->hasOne('App\Category', 'id', 'category_id');
    }
}
