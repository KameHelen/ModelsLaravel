<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'email',
        'edad'
    ];

    // Relación muchos a muchos con Materias
    public function materias()
    {
        return $this->belongsToMany(Materia::class, 'alumno_materia', 'alumno_id', 'materia_id')
                    ->withPivot('fecha_inscripcion', 'nota_final')
                    ->withTimestamps();
    }
   
}
