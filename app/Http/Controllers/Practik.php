<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class Practik extends Controller
{
    public function hello(){
        return view("test.praktik");
    }
    public function info()
    {
        return view("test.praktik2");
    }
    public function kat()
    {
        return view("test.praktik3");
    }

}
?>