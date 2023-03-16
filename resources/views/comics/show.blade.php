@extends('layouts.app')

@section('content')
      <div class="container">
            <div class="row">
                  <div class="col">
                        <h1>{{ $comic->title }}</h1>
                        <a href="{{ route('comics.index') }}" class="btn btn-primary mt-2 mb-3">
                              Torna indietro
                        </a>
                  </div>
                  
                  <div class="row mb-3">
                        <div class="col-4">
                              <div class="card text-center">
                                    <img class="card-img-top" src="{{ $comic->thumb }}">
                              </div>   
                        </div>
                        <div class="col-4">
                              <div class="card text-center bg-primary text-white">
                                    <div class="card-body">
                                          <p>{{ $comic->description }}</p>
                                    </div>
                              </div>   
                        </div>
                  </div>

            </div>
      </div>
@endsection