<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class FormField extends Model
{
    protected $fillable = ['form_id', 'label', 'type', 'options', 'is_required', 'sort_order'];
    protected $casts = ['options' => 'array'];
}