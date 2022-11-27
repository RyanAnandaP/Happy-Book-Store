<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    use HasFactory;

    public function book_category(){
        return $this->hasMany(book_category::class, 'category_id', 'id');
    }
}
