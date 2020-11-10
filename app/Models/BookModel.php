<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookModel extends Model
{
    protected $table = 'books';


    use HasFactory;



    protected $fillable = [
        'name',
        'descriptions'

    ];
}
