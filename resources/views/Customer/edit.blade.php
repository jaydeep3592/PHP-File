@extends('Layouts.Layout')
@section('main-section')
    <div class="container mt-5">
        
        {{-- @php
            print_r($customer);
        @endphp --}}

        <div class="card">
            <div class="card-header">
                <h1>Edit Customer
                  <a type="button" class="btn btn-info btn-lg float-end" href="{{url('/customer')}}">View Customers</a>
                </h1><hr/>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <img src="{{asset('images\img_1.jpg')}}" class="img-fluid"/> 
                    </div>
                    <div class="col">
                        <form method="post" action="{{url('/customer/update/'.$customer->id)}}">
                            @csrf
                            @method('PUT');
                            <div class="row">
                                <div class="mb-3 col-6">
                                    <label for="" class="form-label"><b>Name</b></label>
                                    <input type="text" name="name" value="{{$customer->name}}" class="form-control"/>
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="" class="form-label"><b>Email</b></label>
                                    <input type="text" name="email" value="{{$customer->email}}" class="form-control"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-6">
                                    <label for="" class="form-label"><b>Mobile</b></label>
                                    <input type="number" name="mobile" value="{{$customer->mobile}}" class="form-control"/>
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="" class="form-label"><b>DOB</b></label>
                                    <input type="date" name="dob" value="{{$customer->dob}}" class="form-control"/>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label"><b>Gender</b></label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" value="M"
                                    {{$customer->gender=="M"? "checked":''}}/>
                                    <label class="form-check-label" for="">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" value="F"
                                    {{$customer->gender=="F"? "checked":''}}/>
                                    <label class="form-check-label" for="">Female</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" value="O"
                                    {{$customer->gender=="O"? "checked":''}}/>
                                    <label class="form-check-label" for="">Other</label>
                                </div>
                            </div>
                     
                            <div class="mb-3 ">
                                <label for="" class="form-label"><b>Address</b></label>
                                <textarea name="address" class="form-control">{{$customer->address}}</textarea>
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" name="" class="btn btn-primary">
                                    Update
                                </button>
                            </div>
                            
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection