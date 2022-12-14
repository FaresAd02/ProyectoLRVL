<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class estudiante extends Model
{
    use HasFactory;

    protected $table = 'estudiantes';
    protected $fillable = [
        'nombres',
        'apellidos',
        'fecha_nacimiento',
        'id_carrera',
        'sexo',
        'estado_civil',
        'status',
        'id_campus',
        'id_pais',
        'fecha_ingreso',
    ];

    protected $dates = ['fecha_nacimiento', 'fecha_ingreso'];

    public const CARRERAS = [
        '',
        'Licenciatura en Turismo',
        'Licenciatura en Derecho',
        'Licenciatura en Relaciones Industriales',
        'Licenciatura Comercio y Negocios Internacionales',
        'Licenciatura Contaduría Financiera',
        'Licenciatura en Marketing',
        'Licenciatura Gerencia de Negocios',
        'Licenciatura en Ingeniería Finaciera',
        'Licenciatura en Informática Administrativa',
        'Licenciatura en Emprendimiento Gerencial',
        'Licenciatura en Psicología',
        'Ingenieria en Computacion',
        'Ingenieria en Electronica',
        'Ingenieria en Produccion Industrial'
    ];

    public const CAMPUS = [
        '',
        'San Pedro Sula',
        'La Ceiba',
        'Puerto Cortes',
        'El Progreso',
        'Santa Barbara',
        'Tegucigalpa',
        'Roatan',
        'Siguatepeque',
        'Choluteca',
        'Choloma',
        'Juticalpa'
    ];

    public const PAISES = ['', 'Belice', 'Costa Rica', 'El Salvador', 'Guatemala', 'Honduras', 'Nicaragua', 'Panamá'];

    public function id_carrera()
    {
        return self::CARRERAS[$this->id_carrera];
    }
    public function id_campus()
    {
        return self::CAMPUS[$this->id_campus];
    }
    public function id_pais()
    {
        return self::PAISES[$this->id_pais];
    }
}
