<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdmissionEnquiry extends Model
{
    protected $table = 'admission_enquiries';
    
    protected $fillable = [
        'child_name',
        'parent_name',
        'mobile',
        'class_name',
        'message'
    ];
}