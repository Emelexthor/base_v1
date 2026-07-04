<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;
    //indicar o nome da tabela
    protected $table = 'courses';
    //indicar quais os campos que podem ser preenchidos
    protected $fillable = ['name'];
}
