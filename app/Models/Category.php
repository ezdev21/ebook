<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public function books()
    {
        $this->belongsToMany(Category::class);
    }
    public function funs()
    {
        return $this->belongsToMany(User::class);
    }
}
