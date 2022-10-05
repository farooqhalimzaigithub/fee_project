<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admission_Type extends Model
{
    use HasFactory;
    public $primaryKey = 'admission_id';
    protected $table = "admissions__types";

}
