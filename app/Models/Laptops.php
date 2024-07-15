<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laptops extends Model
{
    use HasFactory;
    public function stuents()
    {
        return $this->belongsTo(Stuents::class);
    }
}