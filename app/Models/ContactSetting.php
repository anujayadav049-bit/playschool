<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class ContactSetting extends Model
{
    protected $table = 'contact_settings';
    protected $guarded = []; // sab field save honge, phone ho ya phone1
}