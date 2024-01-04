<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// $table->id('id_ulasan');
//             $table->integer('rating');
//             $table->string('text');
//             $table->string('author-name');
//             $table->timestamps();

class Ulasan extends Model
{
    protected $fillable = [
        'author_name',
        'text',
        'rating',
        'created_at'
    ];
}
