<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    protected $table = "rules";

    protected $fillable = ['title','description','type_rule'];

    public function concepts()
    {
        return $this->hasMany('App\Concept');
    }
}
