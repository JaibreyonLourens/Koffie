<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    public function supplies() {
        return $this->belongsToMany('\App\Supply',
            'purchases_rules',
            'purchase_id',
            'supply_id');
    }
}
