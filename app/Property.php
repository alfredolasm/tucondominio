<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Property extends Model
{

    use Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'street'
            ]
        ];
    }


    protected $table = "properties";
    // hay que agregar a las tablas los campos de urbanizacion, calle y numero


    protected $fillable = ['number','street','beneficiary_id','urban_id'];

    //Una propiedad  puede tener varios beneficiarios
    public function beneficiaries()
    {
        return $this->belongsToMany('App\Beneficiary')->withTimestamps();
    }
    
    //Una propiedad solo puede tener una urbanizacion
    public function urbans()
    {
        return $this->belongsTo('App\Urban'); 
    }

    //Una propiedad puede tener varias imagenes
    public function imagepropes()
    {
        return $this->hasMany('App\Imageprope');
    }

    

}
            