<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journale extends Model
{
    use HasFactory;
    protected $table = 'Journale';
    protected $fillable = ['title', 'description', 'date', 'category','imageArticle'];

}
