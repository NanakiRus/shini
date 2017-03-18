@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach($tire as $value)
            <h1>{{$value->model}}</h1>
            <p>{{$value->slug}}</p>
            <p>{{$value->standardSize}}</p>
            <p>{{$value->dia}}</p>
            <p>{{$value->season}}</p>
            <p>{{$value->brand}}</p>
            <p>{{$value->model}}</p>
            <p>{{$value->amount}}</p>
            <p>{{$value->specification}}</p>
            <hr />
            <p>{{$value->one}}</p>
            <p>{{$value->two}}</p>
            <p>{{$value->four}}</p>
            <hr />
            <p>{{$value->name}}</p>
            <p>{{$value->order}}</p>
            <p>{{$value->imagePriority}}</p>
        @endforeach
    </div>
@endsection