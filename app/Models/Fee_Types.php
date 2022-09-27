<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fee_Types extends Model
{
    use HasFactory;
    public $primaryKey = 'fee_type_id';

    public function Fee_Category()
    {
        return $this->belongsTo('App\Fee_Category','category_id');
    }


    public function Fee_Master(){
        return $this->hasMany('App\Fee_Master');
   }



}
