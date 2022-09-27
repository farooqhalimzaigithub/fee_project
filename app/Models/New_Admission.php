<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class New_Admission extends Model
{
    use HasFactory;
    public $primaryKey = 'new_admission_id';

    public function Classes()
    {
        return $this->belongsTo('App\Classes','class_id');
    }

    public function Sections()
    {
        return $this->belongsTo('App\Sections','section_id');
    }
}
