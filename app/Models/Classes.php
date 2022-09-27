<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;
    public $primaryKey = 'class_id';

    public function Classes(){
        return $this->hasMany('App\Fee_Master');
    }


    public function New_Admission(){
        return $this->hasMany('App\New_Admisiion');
   }
}
