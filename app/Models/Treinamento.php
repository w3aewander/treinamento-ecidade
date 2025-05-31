<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treinamento extends Model
{
    protected $table = "treinamentos";
    protected $fillable = [
        'nome',
        'descricao',
        'data_inicio',
        'data_fim',
        'local',
        'instrutor',
        'carga_horaria'
    ];
    use HasFactory;
}
