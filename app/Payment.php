<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = "payments";

    protected $fillable = ['reference','bank','amount','date_at','confirmed','beneficiary_id'];
    
    //Un pago solo puede tener un concepto
    public function concepts()
    {
        return $this->belongsTo('App\Concept');

    }

    //Un pago solo puede tener una imagen
    public function imagepays()
    {
        return $this->hasOne('App\Imagepay');

    }
    //relacion uno a uno
    
    public function beneficiaries()
    {
        return $this->belongsTo('App\Beneficiary');
    }

    
}
