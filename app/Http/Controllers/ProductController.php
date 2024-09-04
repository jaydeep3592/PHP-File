<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $day=51;
        $names=["Ram","Shyam","Neha","Rekha","Jaya","abhi"];
        return view('Products.Productlist',compact('day','names'));
    }

    public function displayproducts(){
        $products=array(
            "product1" => array("modelno"=>101,"price"=>9000,"brand"=>"brand1","image"=>"/images/sneakers_1.jpeg"),
            "product2" => array("modelno"=>102,"price"=>7000,"brand"=>"brand2","image"=>"/images/sneakers_2.jpeg"),
            "product3" => array("modelno"=>103,"price"=>4000,"brand"=>"brand3","image"=>"/images/sneakers_3.jpeg"),
            "product4" => array("modelno"=>104,"price"=>1000,"brand"=>"brand4","image"=>"/images/sneakers_4.jpeg"));

            return view('Products.Newarrivals')->with('products',$products);
    }
}
