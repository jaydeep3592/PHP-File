@extends('Layouts.Layout')
@section('main-section')
    <h1 class="text-danger">Product List Page</h1>
    <hr>
    
    {{-- @switch($day)
        @case(1)<h1>This is sunday</h1>
        @break
        @case(5)<h1>This is Thusday</h1>
        @break
        @case(7)<h1>This is Saturday</h1>
        @break
        @case(4)<h1>This is Wednesday</h1>
        @break
        @case(2)<h1>This is Monday</h1>
        @break
        @case(6)<h1>This is Friday</h1>
        @break
        @case(3)<h1>This is Tuesday</h1>
        @break
        @default
            <h1>Invalid Day</h1>
    @endswitch --}}

    {{-- @php
        print_r($names);
    @endphp --}}

    {{-- @for ($i=0;$i<count($names);$i++)
        <h3>{{$names[$i]}}</h3>
    @endfor --}}

    {{-- @foreach ($names as $j)
        <h2>{{$j}}</h2>
    @endforeach --}}
    {{-- @foreach ($names as $A=>$B)
        <h2>{{$A}}=>{{$B}}</h2>
    @endforeach --}}

    {{-- if array is empty and we show a msg --}}
    @forelse ($names as $B)
        <h2>{{$B}}</h2>
    @empty
        <h2>Empty Array</h2>
    @endforelse
@endsection
