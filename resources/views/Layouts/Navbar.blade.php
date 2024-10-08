<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          {{-- <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
          </li> --}}
          {{-- <li class="nav-item">
            <a class="nav-link" href="{{url('/products')}}">Products</a>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link" href="{{url('/products/new')}}">New Arrivals</a>
          </li>
          <li class="nav-item dropdown">
            {{-- <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Customer
            </a> --}}
            <li class="nav-item">
              <a class="nav-link" href="{{url('customer/add')}}">Add Customer</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('customer')}}">View Customer</a>
            </li>
            {{-- <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{url('customer/add')}}">Add Customer</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="{{url('customer')}}">View Customets</a></li>
            </ul> --}}
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/file')}}">File Upload</a>
          </li>
        </ul>
        <form class="d-flex" role="search" action="{{url('/customer')}}">
          <input class="form-control me-2" type="search" name="search" value="{{Request::get('search')}}" placeholder="Search">
          <button class="btn btn-danger" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>