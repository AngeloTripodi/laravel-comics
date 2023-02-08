@extends('layouts.app')

@section('main-content')
<div>
    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
            <div class=" col-3">
            <div>
                <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                <h3>{{$comic['title']}}</h3>
            </div>
        </div>
            @endforeach
        </div>
    </div>
</div>
@endsection