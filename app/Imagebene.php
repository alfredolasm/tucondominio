<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagebene extends Model
{
    protected $table = "image01";

    protected $fillable = ['name','beneficiary_id'];

    //Una imagen solo puede tener una pago
    public function beneficiaries()
    {
        return $this->belongsTo('App\Beneficiary');
    }

}
