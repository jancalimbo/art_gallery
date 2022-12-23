<?php

namespace App\Http\Livewire\Art;

use App\Models\Art;
use App\Models\Order;
use Livewire\Component;

class OrderByArt extends Component
{
    public $artId;

    public function getArtProperty(){
        return Art::find($this->artId);
    }

    public function loadOrdersByArt(){
        $orders = Order::where('art_id', $this->artId)->where('status', 'incomplete')->get();

        return compact('orders');
    }
    public function render()
    {
        return view('livewire.art.order-by-art',$this->loadOrdersByArt());
    }
}
