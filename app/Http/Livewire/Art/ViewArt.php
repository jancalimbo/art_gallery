<?php

namespace App\Http\Livewire\Art;

use App\Models\Art;
use Livewire\Component;

class ViewArt extends Component
{
    public $artId;

    public function loadArt(){
        $art = Art::where('id',$this->artId)->get();

        return compact('art');
    }

    public function render()
    {
        return view('livewire.art.view-art', $this->loadArt());
    }
}
