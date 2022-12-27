<?php

namespace App\Http\Livewire\Art;

use App\Models\Art;
use Livewire\Component;
use RealRashid\SweetAlert\Facades\Alert;

class Delete extends Component
{
    public $artId;

    public function getArtProperty(){
        return Art::find($this->artId);
    }

    public function delete(){
        $this->art->delete();

        Alert::info("Artwork deleted");
        return redirect(route('curator-view'));
    }

    public function back(){
        return redirect(route('curator-view'));
    }



    public function render()
    {
        return view('livewire.art.delete');
    }
}
