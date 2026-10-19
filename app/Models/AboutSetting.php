<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class AboutSetting extends Model
{
    protected $fillable = ['title','description','image1','image2','image3','mission_title','mission_desc','vision_title','vision_desc'];
}