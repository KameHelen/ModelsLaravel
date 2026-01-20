<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Alumno;
use App\Models\Materia;


class AlumnoMateriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       // Crear alumnos
        $alumno1 = Alumno::create([
            'nombre' => 'Juan Pérez',
            'email' => 'juan@example.com',
            'edad' => 20
        ]);

        $alumno2 = Alumno::create([
            'nombre' => 'María García',
            'email' => 'maria@example.com',
            'edad' => 21
        ]);

        $alumno3 = Alumno::create([
            'nombre' => 'Carlos López',
            'email' => 'carlos@example.com',
            'edad' => 19
        ]);

        // Crear materias
        $mates = Materia::create([
            'nombre_materia' => 'Matemáticas',
            'codigo' => 'MAT101',
            'creditos' => 6
        ]);

        $historia = Materia::create([
            'nombre_materia' => 'Historia',
            'codigo' => 'HIS101',
            'creditos' => 4
        ]);

        $ingles = Materia::create([
            'nombre_materia' => 'Inglés',
            'codigo' => 'ING101',
            'creditos' => 3
        ]);

        $programacion = Materia::create([
            'nombre_materia' => 'Programación',
            'codigo' => 'PROG101',
            'creditos' => 6
        ]);

        // Relacionar alumnos con materias
        $alumno1->materias()->attach($mates->id, [
            'fecha_inscripcion' => now(),
            'nota_final' => 8.5
        ]);
        
        $alumno1->materias()->attach($historia->id, [
            'fecha_inscripcion' => now(),
            'nota_final' => 9.0
        ]);

        // María cursa Inglés y Programación
        $alumno2->materias()->attach($ingles->id, [
            'fecha_inscripcion' => now(),
            'nota_final' => 7.8
        ]);
        
        $alumno2->materias()->attach($programacion->id, [
            'fecha_inscripcion' => now(),
            'nota_final' => 9.2
        ]);

        // Carlos cursa Matemáticas, Inglés y Programación
        $alumno3->materias()->attach($mates->id, [
            'fecha_inscripcion' => now(),
            'nota_final' => 6.5
        ]);
        
        $alumno3->materias()->attach($ingles->id, [
            'fecha_inscripcion' => now(),
            'nota_final' => 8.0
        ]);
        
        $alumno3->materias()->attach($programacion->id, [
            'fecha_inscripcion' => now(),
            'nota_final' => 7.5
        ]);

        // María también cursa Historia
        $alumno2->materias()->attach($historia->id, [
            'fecha_inscripcion' => now(),
            'nota_final' => 8.7
        ]);
    }
}
