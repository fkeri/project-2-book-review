<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    // Define one-to-many relationship between 'books' & 'reviews' tables
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
