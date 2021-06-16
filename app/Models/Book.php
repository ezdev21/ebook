<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function star()
    {
        return $this->belongsToMany(User::class);
    }
    public function author()
    {
      return $this->belongsTo(Author::class);  
    }
}
