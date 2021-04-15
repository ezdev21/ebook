<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    public function categories()
    {
        $this->belongsToMany(Category::class);
    }
    public function comments()
    {
        $this->hasMany(Comment::class);
    }
    public function stars()
    {
        return $this->belongsToMany(User::class);
    }
}
