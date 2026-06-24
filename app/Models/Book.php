<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    
    protected $fillable = [
        'title',
        'author',
        'writer',
        'release_date',
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function borrow(){
        return $this->belongsTo(Borrow::class);
    }
}
