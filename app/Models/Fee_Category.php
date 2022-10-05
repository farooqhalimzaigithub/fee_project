<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fee_Category extends Model
{
    use HasFactory;
    public $primaryKey = 'category_id';


    public function Fee_Types(){
        return $this->hasOne('App\Fee_Types');
   }

}
