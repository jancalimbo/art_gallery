<?php

namespace App\Http\Livewire\Art;

use App\Models\Art;
use Livewire\Component;

class Index extends Component
{
    public function loadArts(){
        $arts = Art::orderBy('created_at', 'desc')->get();
        return compact('arts');
    }
    public function render()
    {
        return view('livewire.art.index', $this->loadArts());
    }
}
