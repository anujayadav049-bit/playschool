<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class HomeSetting extends Model
{
    protected $guarded = [];
    
    // Ye important hai - extra_data ko array banayega
    protected $casts = [
        'extra_data' => 'array',
    ];

    // Helper - extra_data se value nikalne ke liye
    public function getData($key, $default = null){
        return $this->extra_data[$key] ?? $this->$key ?? $default;
    }
}