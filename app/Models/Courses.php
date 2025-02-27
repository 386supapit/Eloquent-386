<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'price', 'duration', 'teacher_id'];
    
    public function teacher() {
        return $this->belongsTo(Teacher::class);
    }
    public function registers() {
        return $this->hasMany(Register::class);
    }
}
