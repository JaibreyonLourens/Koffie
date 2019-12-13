<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class work_order extends Model
{
    protected $fillable = ['amount', 'description'];
}
