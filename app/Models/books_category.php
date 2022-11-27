<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class books_category extends Model
{
    use HasFactory;

    public function books(){
        return $this->hasMany(books::class, 'id', 'book_id');
    }

    public function categories(){
        return $this->hasMany(categories::class, 'id', 'caregory_id');
    }
}
