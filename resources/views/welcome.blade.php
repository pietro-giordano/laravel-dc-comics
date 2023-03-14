@extends('layouts.app')

@section('content')
    <div class="card-container">
            <div class="card-body">
                  <div class="card">
                        <h1 class="card-title">DC Comics</h1>

                        <a href="{{ route('comics.index') }}" class="btn btn-primary">
                              Vai ai fumetti
                        </a>
                  </div>   
            </div>
      </div>
@endsection