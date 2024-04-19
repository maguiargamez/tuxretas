<?php

namespace App\Livewire\Modules\Clients;

use App\Http\Traits\WithSorting;
use App\Models\Client;
use Livewire\Component;
use Livewire\WithPagination;

class ClientsIndex extends Component
{    
    use WithPagination, WithSorting;
    protected $paginationTheme = 'bootstrap';
    public $paginate = 10; 
    public $search = '';
    public $title='Clientes';
    public $titleIcon= "ri-user-2-fill";
    public $breadcrumb = [
        "Clientes" => "clients.index", 
    ];
    protected $listeners = [
        'refresh-data' => '$refresh',
        'destroy',
        'destroySelected'
    ];

    public function updatingPaginate()
    {
        $this->resetPage();
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.modules.clients.clients-index', [
            'items' => $this->items
        ]);
    }

    public function getItemsProperty()
    {
        return ($this->itemsQuery->paginate($this->paginate));
    }

    public function getItemsQueryProperty()
    {
        return Client::query()
            ->search(trim($this->search))
            ->orderBy($this->sortBy, $this->sortDirection);
    }
}
