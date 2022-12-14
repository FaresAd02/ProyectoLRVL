<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\estudiante;
use Livewire\WithPagination;

class EstudianteIndex extends Component
{

    use WithPagination;

    public $busqueda = '';

    public function render()
    {
        $estudiante=$this->consulta();
        $params = 
        [
            'estudiante' => $estudiante->get(),
        ];
        return view('livewire.estudiante-index', $params);
    }

    private function consulta()
    {
        $query = estudiante::orderByDesc('id');
        if ($this->busqueda != '')
        {
            $query->where('nombres', 'LIKE', '%'.$this->busqueda.'%');
        }
        return $query;
    }
}
