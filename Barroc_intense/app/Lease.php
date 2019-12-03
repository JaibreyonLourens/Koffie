<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lease extends Model
{
    public function user(){
        return $this->belongsTo('\App\User', 'customer_id');
    }
    public function invoice(){
        return $this->hasMany('\App\Invoice', 'lease_id');
    }
}
