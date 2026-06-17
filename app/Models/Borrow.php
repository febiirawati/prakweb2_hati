<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{
   protected $fillable = [
        'user_id',
        'book_id',
        'date_start',
        'date_end',
   ];
}
