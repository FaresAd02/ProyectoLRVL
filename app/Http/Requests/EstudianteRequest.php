<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EstudianteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nombres'           => 'required|max:100',
            'apellidos'         => 'required|max:100',
            'fecha_nacimiento'  => 'required|date_format:Y-m-d',
            'id_carrera'        => 'required|numeric|min:1|max:14',
            'sexo'              => 'required|max:1',
            'estado_civil'      => 'required|max:1',
            'status'            => 'required|max:1',
            'id_campus'         => 'required|numeric|min:1|max:11',
            'id_pais'           => 'required|numeric|min:1|max:7',
            'fecha_ingreso'     => 'required|date_format:Y-m-d',
        ];
    }
}
