<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <script src="{{asset('js/bootstrap.js')}}"></script>
</head>
<body>
    <div class="container">
        <h1 class="text-primary">About Us Page</h1>
        {!!$address!!}
        <hr>
        {{-- @if ($name!=null)
        <h2 class="text-success bg-warning">welcome {{$name}}</h2>
        @endif --}}

        {{-- @if ($name!=null)
            <h2 class="text-success bg-warning">welcome {{$name}}</h2>
        @else
            <h2 class="text-success bg-info">welcome Guest</h2>
        @endif --}}

        @if ($name!=null && $name !='jaydeep')
            <h2 class="text-success">welcome {{$name}}</h2>
        @elseif ($name=="jaydeep")
            <h2 class="text-success">welcome Back!</h2>
        @else
            <h2 class="text-info">welcome Guest</h2>
        @endif

        @php
            $isLoggedIn=true;
        @endphp 
    </div>
    
</body>
</html>