<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PathController extends Controller
{
    public function cartes(){
        return view('cartes');
    }
    public function rib(){
        return view('rib');
    }
    public function virements(){
        return view('virements');
    }
    public function operations(){
        return view('operations');
    }

}
