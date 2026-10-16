<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class HomeSetting extends Model
{
    protected $guarded = [];
    protected $fillable = [
        'banner_title',
        'banner_subtitle',
        'banner_image',
        'about_title',
        'about_description',
        'footer_logo',
        'footer_description',
        'footer_address',
        'footer_phone',
        'footer_email',
        'footer_facebook',
        'footer_instagram',
        'footer_youtube',
        'footer_copyright',
    ];
}