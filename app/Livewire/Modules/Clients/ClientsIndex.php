<?php

namespace App\Livewire\Modules\Clients;

use Livewire\Component;

class ClientsIndex extends Component
{    
    public $title='Clientes';
    public $titleIcon= "ri-user-2-fill";
    public $breadcrumb = [
        "Clientes" => "clients.index", 
    ];

    public function render()
    {
        return view('livewire.modules.clients.clients-index');
    }
}
