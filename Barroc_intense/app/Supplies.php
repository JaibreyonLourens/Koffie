<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplies extends Model
{
    public function supplies() {
        return $this->belongsToMany(
            '\App\Supply',
            'purchasesrules',
            'purchase_id',
            'supply_id');
    }
}
