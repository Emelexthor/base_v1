<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;
    //indicar o nome da tabela no banco de dados
    protected $table = 'classes';

protected $fillable = [
    'name',
    'description',
    'order_classe',
    'course_id',
];
   //criar realcionameto entre um e muitos com a tabela courses
    public function course(){
        return $this->belongsTo(Course::class);
    }
}
