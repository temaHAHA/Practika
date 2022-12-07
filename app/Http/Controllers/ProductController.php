<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function lora(){
        $comic=\App\Models\product::all();
        return view('test.praktik2',['comic' =>$comic]);
    }
    
    public function kola(Request $req)
    {
        $sort = $req->input('sorted');
        $optionSorted = $req->input('optionSorted');
        $comic=\App\Models\product::all();
        return view('test.praktik3',['comic' =>$comic, 'sort'=>$sort, 'optionSorted'=>$optionSorted]);
    }
    public function tovar($id){
        $comic=\App\Models\product::where("id_category", $id)->get();
        return view('test.praktik4',['comic' =>$comic]);
    }
}
