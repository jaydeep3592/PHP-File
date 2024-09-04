@extends('Layouts.Layout')
@section('main-section')
    <div class="container mt-5">
        
        {{-- aleart meg  *aleart msg session vadu banav vuu refresh karvathi hoyu jay aetle*--}}
        @if (session('message')) 
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{session('message')}}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

      
        <div class="card">
            <div class="card-header">
                <h1>Deleted Customer
                  <a type="button" class="btn btn-danger btn-lg float-end" href="{{url('/customer')}}">Back</a>
                </h1>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th>Mobile</th>
                                <th>DOB</th>
                                <th>Gender</th>
                                <th>Address</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($customers as $c)
                            <tr>
                                <td scope="row">{{$c->id}}</td>
                                <td>{{$c->name}}</td>
                                <td>{{$c->email}}</td>
                                <td>{{$c->mobile}}</td>
                                <td>{{formattedDate('D d-M-Y',$c->dob)}}</td>
                                {{-- <td>{{date('d-M-Y',strtotime($c->dob))}}</td>  helper.php ma jayne aapvu--}}
                                 <td>
                                    @if ($c->gender=='M')
                                        Male
                                    @elseif ($c->gender=='F')
                                        Female
                                    @else
                                        Other
                                    @endif
                                </td>
                                <td>
                                    @if ($c->address!='')
                                        {{$c->address}}
                                    @else
                                        NA
                                    @endif
                                </td>
                                <td>
                                    @if ($c->status=='1')
                                        <span class="badge rounded-pill text-bg-success">Active</span>
                                    @else
                                    <span class="badge rounded-pill text-bg-danger">Inactive</span>
                                    @endif
                                </td>
                                <td>
                                    <a name="edit" class="btn btn-primary" href="{{url('/customer/restore/'.$c->id)}}">
                                        Restore</a>

                                    <a name="edit" class="btn btn-danger" onclick="return window.confirm('are you sure to delete this??')" 
                                    href="{{url('/customer/forcedelete/'.$c->id)}}"><i class="bi bi-trash"></i>Delete</a>
                                </td>
                            </tr>
                            @empty
                                <tr><td colspan="8">No Customer Found</td></tr>
                            @endforelse
                            
                        </tbody> 
                    </table>
                </div>
                {{-- for paginetion --}}
                {{$customers->links("pagination::bootstrap-5")}}
                
            </div>
    </div>
@endsection