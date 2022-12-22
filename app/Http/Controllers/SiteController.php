<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SiteController extends Controller
{
    // public function logs(){
    //     $logs = auth()->user()->logs;
    //     return view('logs', compact('logs'));
    // }
    public function lobby(){
       return view('pages.site.lobby');
    }
    public function viewArtDetails($id){
       return view('pages.art.user.view-art', compact('id'));
    }
    public function orderArt($id){
        // $art = Art::where('id', $id)->first();

        // Order::create([
        //     'user_id' => auth()->user()->id
        // ]);
        Alert::success(auth()->user()->id);
       return redirect(route('galleria'));
    }
    // public function cart(){
    //     $items = Cart::where('user_id', auth()->user()->id)->get();
        
    //    return view('pages.site.cart', compact('items'));
    // }

    // public function checkout(){
    //     $items = Cart::where('user_id', auth()->user()->id)->get();

    //     foreach ($items as $item) {
    //         $item->delete();
    //     } 
        
    //     Alert("Items checked out successfully");
    //     return redirect(route('cart'));
    // }
}
