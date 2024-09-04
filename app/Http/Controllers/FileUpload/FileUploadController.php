<?php

namespace App\Http\Controllers\FileUpload;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function index(){
        return view('FileUpload.upload');
    }
    public function store(Request $request){
        // dd($request->all());
        // return $request->file('file1');
        if($request->hasFile('file1')){
            $file = $request->file('file1');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/',$filename); //laravel na public folder na aavse
            //$file->storeAs('uploads/',$filename); //storage /app ma aavse
            return redirect()->back()->with('msg','file uploaded successfully');
        }
    }
}
