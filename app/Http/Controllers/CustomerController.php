<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Rules\uppercase;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    // public function index(){ //view customer
    //     // $customers = Customer::all();
    //     // dd($customers); chack karva kay aave 6e ke nay te na mate dd use karvu

    //     // $customers = Customer::paginate(5);
    //     // return view('Customer.view')->with('customers',$customers);
    // }

            // for search button function 
    public function index(Request $request){
        $search = $request->search;
        if($search != ''){
            $customers = Customer::where('name','LIKE',"%$search%")->paginate(5);
        }
        else{
            $customers = Customer::paginate(5);
        }
        return view('Customer.view')->with('customers',$customers);
    }

    public function add(){ //add customet
        return view('Customer.add');
    }
    public function store(Request $request){
        print_r($request->all());
        //echo $request->name;
        //echo $request->input('name');
        //echo $request['name'];
        //echo $request->address;
        //print_r($request->except('_token')); //jyare token no jotu hoy ke biju kay no jotu hoy tyare
        //print_r($request->except(['_token','address']));
        //print_r ($request->only('name'));
        //print_r($request->only(['name','email']));

        // if($request->has('email')){
        //     print_r($request->all());
        // }
        // if($request->has(['email','hobbies'])){
        //     print_r($request->all());
        // }

        // be mathi koy 1 hoy to pan chale
        // if($request->hasAny(['email','hobbies'])){
        //     print_r($request->all());
        // }

        $request->validate([
            'name'=>['required','min:5',new uppercase],
            // 'email'=>'required|email', OR
            'email'=>['required',function($attribute,$value,$fail){
                if(!preg_match("/[\w\!\#\$\%\^\&\*\-\+\=\.]+\@[\w]+\.[a-zA-Z]{3}/",$value)){
                    $fail("Invalide :attribute");
                }
            }],
            'password'=>['required','min:6','max:20',],//'confirmed'
            'cpassword'=>['required','same:password'],
            'gender'=>['required'],
            'mobile'=>['required','min:10','max:10'],
            'dob'=>['required','date'],
        ]);

        $customer = new Customer;
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->mobile = $request->mobile;
        $customer->dob = $request->dob;
        $customer->password =md5($request->password);//password incripted rakhva mate md5   
        $customer->gender = $request->gender;
        $customer->address = $request->address;
        if($customer->save()){
            return redirect('/customer')->with('message','cusromer added');
        }
        
    }
    public function edit($id){ //edit customer
        $customer = Customer::find($id);
        // dd($customer);
        return view('Customer.edit')->with('customer',$customer);
    }

    public function update($id,Request $request){
        $customer = Customer::find($id);
        // dd($request->all());
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->mobile = $request->mobile;
        $customer->dob = $request->dob;   
        $customer->gender = $request->gender;
        $customer->address = $request->address;
        if($customer->save()){
            return redirect('/customer')->with('message','cusromer updated');
        }
    }
         
    public function delete($id){ //delete customer
       Customer::find($id)->delete();
       //return redirect('/customer')->with('message','cusromer deleted');
        return redirect()->back()->with('message','cusromer deleted');
    }  

    public function trashed(){
        $customers = Customer::onlyTrashed()->paginate(5);
        return view('Customer.trash')->with('customers',$customers);
    }

    public function restore($id){
        $customer = Customer::withTrashed()->find($id);
        if($customer){
            $customer->restore();
            return redirect('/customer')->with('message','customer restored');
        }
    }
    public function forcedelete($id){
        $customer = Customer::withTrashed()->find($id);
        if($customer){
            $customer->forcedelete();
            return redirect('/customer/trash')->with('message','customer deleted');
        }
    }

}
