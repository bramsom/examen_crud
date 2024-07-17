<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    public function Departaments(){
        return $this->belongsTo('App\Models\Dempartament');
    }
    public function Son(){
        return $this->hasMany('App\Models\Son');
    }
    public function Abilities(){
        return $this->belongsToMany('App\Models\Ability');
    }
}
