<?php

namespace App\Http\Livewire\Art;

use App\Models\Art;
use Livewire\Component;
use RealRashid\SweetAlert\Facades\Alert;

class Edit extends Component
{
    public $artId;
    public $name, $artist, $description, $price;

    public function getArtProperty(){
        return Art::find($this->artId);
    }

    public function mount(){
        $this->name = $this->art->name;
        $this->artist = $this->art->artist;
        $this->description = $this->art->description;
        $this->price = $this->art->price;
    }

    public function updateArt(){
        $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'artist' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'price' => ['required', 'string', 'max:255']
        ]);

        $this->art->update([
            'name' => $this->name,
            'artist' => $this->artist,
            'description' => $this->description,
            'price' => $this->price,
        ]);

        Alert::success('Updated successfully');
        return redirect(route('curator-view'));
    }

    public function render()
    {
        return view('livewire.art.edit');
    }
}
