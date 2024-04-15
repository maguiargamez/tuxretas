<?php

namespace App\Livewire\Templates;

use Livewire\Component;
use Illuminate\Support\Facades\Route;

class Breadcrumb extends Component
{
    public $title= "";
    public $titleIcon= null;
    public $currentRouteName = "";
    public $breadcrumb = [];

    public function render()
    {
        $this->currentRouteName= Route::currentRouteName();
        return view('livewire.templates.breadcrumb');
    }
}
