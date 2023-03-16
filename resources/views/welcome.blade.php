@extends('layouts.app')

@section('content')
      <div class="container">
            <div class="row">
                  <div class="col text-center">
                        
                        <a href="{{ route('comics.index') }}" class="btn btn-primary mt-3">
                              Vai ai fumetti
                        </a>
                              
                  </div>
            </div>
      </div>
@endsection