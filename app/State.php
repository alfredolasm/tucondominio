<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $table    = "states";

    protected $fillable = ['name'];

    public function cities()
    {
        return $this->hasMany('App\City');
    }
    public function scopeSearchState($query, $name)
    {
        return $query->where('name', '=', $name);

    }
}
