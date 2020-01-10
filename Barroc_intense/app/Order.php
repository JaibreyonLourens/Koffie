<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['is_completed'];
    public function user(){
        return $this->belongsTo('\App\User', 'user_id');
    }

    public function supply()
    {
        return $this->hasOne('\App\Supplies', 'id','supplies_id');
    }
}
