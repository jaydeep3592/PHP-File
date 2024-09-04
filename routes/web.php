<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FileUpload\FileUploadController;
  

//http://localhost:8000/
// Route::get('/', function () {
//     return view('welcome');
// });
  //http://localhost:8000/about
// Route::get('/about',function(){
//     return "About us Page hii"; 
// });

//DYNAMIC PARAMETER

   //http://localhost:8000/product/101
// Route::get('/product/{jd}',function($jd){
//     return "product page $jd";
// });

// Route::get('/product/{jd}/{name}',function($jd,$name){
//     return "product page id= $jd  and name=$name";
// });

//OPTIONAL PARAMETER

// Route::get('/courses/{name?}',function($name=null){
//     return  "courses page".$name;
// });

// Route::get('/product/{id}/{name}',function($id,$name){
//     return "product page id=$id and name=$name";
// })->where(['id'=>'[\d]+','name'=>'[a-zA-Z]+']);  //OR

// Route::get('/product/{id}/{name}',function($id,$name){
//     return "product page id=$id and name=$name";
// })->whereNumber('id')->whereAlpha('name');
 
// Route::redirect('/login','about');

// Route::get('/home',function(){
//     return view('home');
// });

// Route::view('/home','home');

Route::get('/about',[FirstController::class,'index']);
Route::get('/about',[FirstController::class,'aboutus']);
// Route::get('/about/{name}',[FirstController::class,'aboutus']);
Route::get('/about/{name?}',[FirstController::class,'aboutus']);

Route::get('/',[FirstController::class,'homepage']);

Route::get ('/products',[ProductController::class,'index']);
Route::get('/products/new',[ProductController::class,'displayproducts']);

// Route::get('/customer',[CustomerController::class,'index']);
// Route::get('/customer/add',[CustomerController::class,'add']);
// Route::post('/customer/add',[CustomerController::class,'store']);
// Route::get('/customer/edit/{id}',[CustomerController::class,'edit']);
// Route::put('/customer/update/{id}',[CustomerController::class,'update']);
// Route::get('/customer/delete/{id}',[CustomerController::class,'delete']);
                     //*OR*//

// Route::controller(CustomerController::class)->group(function(){
//   Route::get('/customer','index');
//   Route::get('/customer/add','add');
//   Route::post('/customer/add','store');
//   Route::get('/customer/edit/{id}','edit');
//   Route::put('/customer/update/{id}','update');
//   Route::get('/customer/delete/{id}','delete');
// }); 
                 //*OR*//

Route::controller(CustomerController::class)->group(function(){
  Route::prefix('/customer')->group(function(){
    Route::get('/','index');
    Route::get('/add','add');
    // Route::post('/add','store'); *OR*
    Route::post('/add','store')->name('customer.add');
    Route::get('/edit/{id}','edit');
    Route::put('/update/{id}','update');
    Route::get('/delete/{id}','delete');
    Route::get('/trash','trashed');
    Route::get('/restore/{id}','restore');
    Route::get('/forcedelete/{id}','forcedelete');
  });
  
});

Route:: controller(FileUploadController::class)->group
(function(){
  Route::get('/file','index');
  Route::post('/file','store')->name('file.upload');
});