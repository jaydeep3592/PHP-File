<?php

namespace App\Http\Controllers;

use view;
use index;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\FirstController;

class FirstController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function aboutus($name=null){
        $address="<h2>pune</h2>";
        //return view('About')->with(['name'=>$name,'address'=>$address]); //OR
        // return view('about',compact('name','address'));  //OR
        $data=compact('name','address');
        return view('about')->with($data);
    }

    function homepage(){return view('home');}
    
}

?>