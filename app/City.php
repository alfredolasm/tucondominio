<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = "cities";

    protected $fillable = ['name','state_id'];
    
    //Una ciudad puede tener muchas propiedades
    public function states()
    {
        return $this->belongsTo('App\State');
    }

    //Una ciudad puede tener muchos Urbanizaciones
    public function urbans()
    {
        return $this->hasMany('App\Urban');
    }
}
