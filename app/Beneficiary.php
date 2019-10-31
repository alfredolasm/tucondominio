<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beneficiary extends Model
{
    protected $table = "beneficiaries";

    protected $fillable = ['ced','name','sex','category_id','ocuppation','members','email','phone','mobile','user_id'];

    //Un Beneficiario  solo puede tener una categoria
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    //Un beneficiario solo puede tener un usuario
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    //Un beneficiario puede tener varias propiedades
    public function properties()
    {
        return $this->belongsToMany('App\Property');
    }
    //Un beneficiario solo puede tener varias imagen
    public function imagebenes()
    {
        return $this->hasMany('App\Imagebene');
    }

    public function payments()
    {
        return $this->hasMany('App\Payment');
    }


}
