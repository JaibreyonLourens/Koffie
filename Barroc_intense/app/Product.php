<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
//    protected $fillable = ['name', 'price', 'categories_id'];

    public function order() {
        return $this->belongsTo('\App\Users', 'user_id');
        return $this->belongsTo('\App\Supplies', 'Supplies_id');
    }
}
