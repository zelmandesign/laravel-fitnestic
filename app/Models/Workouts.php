<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workouts extends Model
{
    use HasFactory;

    public $fillable = [
        'name', 'category', 'tags', 'description', 'author'
    ];

    // Assuming a workout belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
