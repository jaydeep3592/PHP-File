@extends('Layouts.Layout')
@section('main-section')
<div class="container mt-5">
    
    <h1 class="text-danger">New Arraivals</h1><hr/>
    <div class="row">
        @forelse ($products as $k=>$v)
            <div class="col-3">
                <div class="card">
                    <img class="card-img-top" src="{{asset($v["image"])}}" alt="{{$v["brand"]}}" height="200px" />
                    <div class="card-body">
                        <h4 class="card-title">{{$v["modelno"]}}</h4>
                        <p class="card-text">{{$v["brand"]}}</p>
                        <p class="card-text">{{$v["price"]}}</p>
                    </div>
                </div>
            </div>
        @empty
            <h1>No Product Found</h1>
        @endforelse
        
    </div>
</div>    
@endsection