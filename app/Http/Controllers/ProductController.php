<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function lora(){
        $comic=\App\Models\product::all();
        return view('test.aboutUs',['comic' =>$comic]);
    }
    
    public function kola(Request $req)
    {
        $sort = $req->input('sorted');
        $optionSorted = $req->input('optionSorted');
        $comic=\App\Models\product::all();
        return view('test.catalog',['comic' =>$comic, 'sort'=>$sort, 'optionSorted'=>$optionSorted]);
    }
    public function tovar($id){
        $comic=\App\Models\product::where("id", $id)->get();
        $sort=\App\Models\category::all();
        return view('test.tov',['comic' =>$comic,'sort'=>$sort]);
    }
    public function price($name,$nap){
        $comic=\App\Models\product::orderby($name,$nap)->get();
        $sort=\App\Models\category::all();
        return view('test.tov',['comic' =>$comic,'sort'=>$sort]);
    }
    public function info(){
        return view('test.local');
    }
}
