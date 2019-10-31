<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Urban extends Model
{
    protected $table    = "urbans";
    protected $fillable = ['name','city_id'];

    public function cities()
    {
        return $this->belongsTo('App\City');
    }

    public function properties()
    {
        return $this->hasMany('App\Property');
    }

}
