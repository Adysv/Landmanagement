<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stuents extends Model
{
    use HasFactory;
    protected $casts = [
        'schools' => 'array'
    ];

    public function laptops()
    {
        return $this->hasOne(Laptops::class);
    }
    public function cources()
    {
        return $this->belongsToMany(Courses::class, 'courses_stuents');
    }
}