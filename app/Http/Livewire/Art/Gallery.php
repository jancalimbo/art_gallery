<?php

namespace App\Http\Livewire\Art;

use App\Models\Art;
use Livewire\Component;

class Gallery extends Component
{
    public function loadArts(){
        $arts = Art::orderBy('created_at', 'desc')->get();
        return compact('arts');
    }

    // public function like(){

    //    Alert($this->equipment->id);

    //    return redirect('equipments/uindex');
    // }
    public function render()
    {
        return view('livewire.art.gallery', $this->loadArts());
    }
}
