<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class Usuarios extends Component
{
    public $usuarios;
    public function render()
    {
        $this->usuarios = User::all();
        return view('livewire.usuarios');
        
    }
}
