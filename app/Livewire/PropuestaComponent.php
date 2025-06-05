<?php

namespace App\Livewire;

use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;
use Livewire\Component;

class PropuestaComponent extends Component
{
    public function render()
    {
        return view('livewire.propuesta-component');
    }

    public function verAlerta(): void
    {
        LivewireAlert::title('Hola Mundo!')
            ->success()
            ->show();
    }
}
