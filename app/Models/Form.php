<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $fillable = ['name', 'slug'];
    public function fields()
    {
        return $this->hasMany(FormField::class)->orderBy('sort_order');
    }
    public function submissions()
    {
        return $this->hasMany(FormSubmission::class);
    }
}