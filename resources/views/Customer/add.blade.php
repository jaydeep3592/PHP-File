@extends('Layouts.Layout')
@section('main-section')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h1>Add Customer
                  <a type="button" class="btn btn-info btn-lg float-end" href="{{url('/customer')}}">View Customers</a>
                </h1><hr/>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <img src="{{asset('images\img_1.jpg')}}" class="img-fluid"/>
                    </div>
                    <div class="col">
                        {{-- <form method="post" action="{{url('/customer/add')}}"> *OR* --}}
                            <form method="post" action="{{route('customer.add')}}">
                             @csrf {{--@csrf no lakhiye to post method work no kare --}}
                            <div class="row">
                                <div class="mb-3 col-6">
                                    <label for="" class="form-label"><b>Name</b></label>
                                    <input type="text" name="name" class="form-control" value="{{old('name')}}"/>
                                    @error('name')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="" class="form-label"><b>Email</b></label>
                                    <input type="text" name="email" class="form-control" value="{{old('email')}}"/>
                                    @error('email')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-6">
                                    <label for="" class="form-label"><b>Mobile</b></label>
                                    <input type="number" name="mobile" class="form-control" value="{{old('mobile')}}"/>
                                    @error('mobile')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="" class="form-label"><b>DOB</b></label>
                                    <input type="date" name="dob" class="form-control" value="{{old('dob')}}"/>
                                    @error('dob')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label"><b>Gender</b></label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" value="M"/>
                                    <label class="form-check-label" for="">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" value="F"/>
                                    <label class="form-check-label" for="">Female</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" value="O"/>
                                    <label class="form-check-label" for="">Other</label>
                                </div>
                                @error('gender')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                            </div>
                            <div class="row">
                                <div class="mb-3 col-6">
                                    <label for="" class="form-label"><b>Password</b></label>
                                    <input type="password" name="password" class="form-control"/>
                                    @error('password')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                {{-- <div class="mb-3 col-6">
                                    <label for="" class="form-label"><b>Confirm Password</b></label>
                                    <input type="password" name="password_confirmation" class="form-control"/>
                                </div> --}}
                                  {{-- jo name alag hoy tyre match karva mate --}}
                                <div class="mb-3 col-6">
                                    <label for="" class="form-label"><b>Confirm Password</b></label>
                                    <input type="password" name="cpassword" class="form-control"/>
                                    @error('cpassword')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 ">
                                <label for="" class="form-label"><b>Address</b></label>
                                <textarea name="address" class="form-control" value="{{old('address')}}"></textarea>
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" name="" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </form>

                {{-- @if ($errors->any())
                    @php
                        print_r($errors);
                    @endphp
                @endif         --}}

                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection