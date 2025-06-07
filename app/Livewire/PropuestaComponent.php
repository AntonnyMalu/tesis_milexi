<?php

namespace App\Livewire;

use App\Models\Propuesta;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;
use Livewire\Component;

class PropuestaComponent extends Component
{
    public $nombre, $correo, $descripcion, $url;

    public function render()
    {
        return view('livewire.propuesta-component');
    }

    public function limpiar()
    {
        $this->reset(['nombre', 'correo', 'descripcion', 'url']);
        $this->resetErrorBag();
    }

    public function save()
    {
        $rules = [
            'nombre' => 'required|min:3',
            'correo' => 'required|email',
            'descripcion' => 'required',
            'url' => 'required|url'
        ];

        $this->validate($rules);

        $prouesta = new Propuesta();
        $prouesta->nombre = $this->nombre;
        $prouesta->correo =  $this->correo;
        $prouesta->descripcion =  $this->descripcion;
        $prouesta->url =  $this->url;
        $prouesta->save();
        $this->limpiar();

        $this->verAlerta();
    }

    public function verAlerta(): void
    {
        LivewireAlert::title('Propuesta Enviada')
            ->success()
            ->show();
    }
}
