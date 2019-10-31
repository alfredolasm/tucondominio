<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imageprope extends Model
{
    protected $table = "image02";

    protected $fillable = ['name','property_id'];

    //una imagen solo puede tener una propiedad
    public function properties()
    {
        return $this->belongsTo('App\Property');
    }
}
