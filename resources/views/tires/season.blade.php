@extends('layouts.app')

@section('content')
    <div class="container">
        @if(0 === count($tires))
        {{ 'Ничего не найдено' }}
        @endif
        @foreach($tires as $tire)
            <a href="{{ url(Request::url() . '/' . $tire->slug) }}">{{$tire->model}}</a>

        @endforeach
    </div>
    <div>
        {{$tires->links()}}
    </div>
@endsection