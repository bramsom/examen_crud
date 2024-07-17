<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departament extends Model
{
    use HasFactory;

    public function Centers(){
        return $this->belongsTo('App\Models\Center');
    }
    public function Employee(){
        return $this->hasMany('App\Models\Employee');
    }
}
