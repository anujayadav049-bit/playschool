<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class PageSetting extends Model
{
    protected $fillable = [
        'page_slug','banner_title','banner_subtitle','title','description',
        'image','image2','meta_title','meta_description','extra_json'
    ];
    protected $casts = [
        'extra_json' => 'array'
    ];
}