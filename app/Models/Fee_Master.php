<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fee_Master extends Model
{
    use HasFactory;
    public $primaryKey = 'fee_master_id';

    public function Classes()
    {
        return $this->belongsTo('App\Classes','class_id');
    }

    public function Fee_Types()
    {
        return $this->belongsTo('App\Fee_Types','fee_type_id');
    }
}
