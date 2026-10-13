<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    protected $fillable = [
 'student_name','dob','gender','class_apply','aadhaar_no','previous_school',
 'father_name','mother_name','mobile','email',
 'address','city','state','pincode',
 'photo','birth_certificate','aadhaar_card','tc'
];
}