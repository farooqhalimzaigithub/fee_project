<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sections extends Model
{
    use HasFactory;
    public $primaryKey = 'section_id';

    public function New_Admission(){
        return $this->hasMany('App\New_Admisiion');
   }
}
