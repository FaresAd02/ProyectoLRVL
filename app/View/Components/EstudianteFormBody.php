<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\estudiante;

class EstudianteFormBody extends Component
{
    private $estudiante;
    /**
     * Create a new component instance.
     *@param \App\Models\estudiante $estudiante
     * @return void
     */
    public function __construct( $estudiante = null )
    {
        if(is_null($estudiante))
        {
            $estudiante = estudiante::make([
                
            ]);
        }
        $this->estudiante = $estudiante;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $params =
        [
            'estudiante' => $this->estudiante,
        ];
        return view('components.estudiante-form-body', $params);
    }
}
