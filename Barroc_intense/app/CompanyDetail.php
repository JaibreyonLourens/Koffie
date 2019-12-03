<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyDetail extends Model
{
    protected $table = 'companydetails';
    public function user(){
        return $this->belongsTo('\App\User', 'user_id');
    }
}
