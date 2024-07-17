<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Son extends Model
{
    use HasFactory;
    public function Employees(){
        return $this->belongsTo('App\Models\Employee');
    }
}
