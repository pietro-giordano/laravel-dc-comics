@extends('layouts.app')

@section('content')
    <div class="card-container">
            @foreach ($comics as $comic)
                  <div class="card">
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                        <p>{{ $comic['series'] }}</p>
                  </div>   
            @endforeach
      </div>
@endsection