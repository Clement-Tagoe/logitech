<?php

namespace App\Http\Livewire;

use App\Models\Freight;
use Livewire\Component;

class FreightsTable extends Component
{
    public $freight;

    public function mount(Freight $freight)
    {
        $this->freight = $freight;
    }
    
    public function render()
    {
        return view('livewire.freights-table');
    }
}
