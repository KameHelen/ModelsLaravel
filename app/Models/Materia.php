<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
  use HasFactory;

    protected $fillable = [
        'nombre_materia',
        'codigo',
        'creditos'
    ];

    // Relación muchos a muchos con Alumnos
    public function alumnos()
    {
        return $this->belongsToMany(Alumno::class, 'alumno_materia', 'materia_id', 'alumno_id')
                    ->withPivot('fecha_inscripcion', 'nota_final')
                    ->withTimestamps();
    }
}
