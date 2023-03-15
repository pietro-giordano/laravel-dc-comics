@extends('layouts.app')

@section('content')
      <div class="container">
            <div class="row">
                  <div class="col-2">
                        <a href="{{ route('comics.create') }}" class="btn btn-success">
                              Crea nuovo prodotto
                        </a>
                  </div>

                  @foreach ($comics as $comic)
                        <div class="col-4">
                              <div class="card text-center">
                                    <div class="card-body">
                                          <div class="card-title">
                                                {{ $comic->title }}
                                          </div>

                                          <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">
                                                Vedi dettagli
                                          </a>
                                    </div>
                              </div>   
                        </div>
                  @endforeach

            </div>
      </div>
@endsection


