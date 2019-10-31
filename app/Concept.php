<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Concept extends Model
{
    protected $table = "concepts";

    protected $fillable = ['description','period','expiration','amount','surcharge','type','rule_id'];

    //los conceptos solo pueden tener una regla
    public function rules()
    {
        return $this->belongsTo('App\Rule');
    }

    //los conceptos pueden tener muchos pagos
    public function payments()
    {
        return $this->hasMany('App\Payment');
    }

}

