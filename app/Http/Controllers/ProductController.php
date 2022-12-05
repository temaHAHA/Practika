<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function lora(){
        $comic=\App\Models\product::all();
        return view('test.praktik2',['comic' =>$comic]);
    }
    
    public function kola()
    {
        $comic=\App\Models\product::all();
        return view('test.praktik3',['comic' =>$comic]);
    }
}
