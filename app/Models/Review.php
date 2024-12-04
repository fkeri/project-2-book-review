<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    // Define inverse side of one-to-many relationship between 'books' & 'reviews' tables
    public function book() {
        return $this->belongsTo(Book::class);
    }
}
