<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    public function books()
    {
      return $this->hasMany(Book::class);  
    }
    public function newspapers()
    {
      return $this->hasMany(Newspaper::class);
    }
    public function megazines()
    {
      return $this->hasMany(Megazine::class);
    }
    public function blogs()
    {
      return $this->hasMany(Blog::class);
    }
}
