<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagepay extends Model
{
    protected $table = "image03";

    protected $fillable = ['name','payment_id'];

    //una imagen solo puede tener un pago
    public function payments()
    {
        return $this->belongsTo('App\Payment');
    }
}
