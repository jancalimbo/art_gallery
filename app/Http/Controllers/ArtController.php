<?php

namespace App\Http\Controllers;

use App\Models\Art;
use App\Models\Order;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ArtController extends Controller
{
    public function index(){
        return view('pages.art.admin.index');
    }
    public function create(){
        return view('pages.art.admin.add');
    }
    public function gallery(){
        return view('pages.art.user.gallery');
    }
    public function orderList(){
        $arts = Art::all();
        return view('pages.art.admin.orders', compact('arts'));
    }
    public function ordersByArt($id){
        return view('pages.art.admin.order-by-art', compact('id'));
    }
    
    public function confirmPayment($id){
        $order = Order::where('id', $id)->first();
        
        $order->update(['status' => 'paid']);
        
        
        Alert::success('Payment recorded');
        return redirect(route('see-orders'));
    }
    public function orderRecords(){
        $orders = Order::where('status', 'paid')->get();
        return view('pages.art.admin.records', compact('orders'));
    }
    public function editArtDetails($id){
        return view('pages.art.admin.edit-art', compact('id'));
    }
    public function deleteArt($id){
        return view('pages.art.admin.deleteArt', compact('id'));
    }
}
