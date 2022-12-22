<?php

namespace App\Http\Controllers;

use App\Models\Art;
use Illuminate\Http\Request;

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
}
