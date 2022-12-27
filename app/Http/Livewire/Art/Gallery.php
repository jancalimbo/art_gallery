<?php

namespace App\Http\Livewire\Art;

use App\Models\Art;
use Livewire\Component;

class Gallery extends Component
{
    public $search;
    public function loadArts(){
        $arts = Art::orderBy('created_at', 'desc')
            ->search($this->search)
            ->get();
        return compact('arts');
    }

  
    public function render()
    {
        return view('livewire.art.gallery', $this->loadArts());
    }
}
