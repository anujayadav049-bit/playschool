<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = ['slug','main_title','title','description','image','extra_data'];
    protected $casts = ['extra_data' => 'array'];
    
    public function getExtraJsonAttribute()
    {
        return $this->extra_data ?? [];
    }
}