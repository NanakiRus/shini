@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach($tires as $tire)
            <a href="{{url('/tires/all/' . $tire->slug)}}">{{$tire->model}}</a>


        @endforeach
    </div>
    <div>
        {{$tires->links()}}
    </div>
@endsection