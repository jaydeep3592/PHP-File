@extends('Layouts.Layout') 
@section('main-section')
    <div class="container mt-5 shadow p-3">

        @if (session('msg'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{session('msg')}}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <h1>File Upload Demo</h1>
        <form enctype="multipart/form-data" method="post" action="{{route('file.upload')}}">
            @csrf
            <div class="mb-3">
               <label for="" class="form-label">Choose file</label>
               <input type="file" class="form-control" name="file1"/>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            
        </form>
        
    </div>
@endsection