@extends('layouts.app')

@section('content')
      <div class="container">
            <h1 class="text-center">Update comic #{{ $comic->id }}</h1>
            
            <div class="row mb-3">
                  <div class="col-3"></div>
                  <div class="col-6">

                        <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="POST">
                              @csrf
                              @method('PUT')

                              <div class="mb-2">
                                    <label for="title" class="form-label">Title: *</label>
                                    <input type="text" class="form-control" name="title" id="title" required placeholder="Insert title..." value="{{ $comic->title }}">
                              </div>
                              <div class="mb-2">
                                    <label for="series" class="form-label">Series: *</label>
                                    <input type="text" class="form-control" name="series" id="series" required placeholder="Insert series..." value="{{ $comic->series }}">
                              </div>
                              <div class="mb-2">
                                    <label for="type" class="form-label">Type: *</label>
                                    <input type="text" class="form-control" name="type" id="type" required placeholder="Insert type..." value="{{ $comic->type }}">
                              </div>
                              <div class="mb-2">
                                    <label for="sale_date" class="form-label">Sale date: *</label>
                                    <input type="date" class="form-control" name="sale_date" id="sale_date" required value="{{ $comic->sale_date }}">
                              </div>
                              <div class="mb-2">
                                    <label for="price" class="form-label">Price: *</label>
                                    <input type="number" class="form-control" name="price" id="price" required placeholder="Insert price..." value="{{ $comic->price }}">
                              </div>
                              <div class="mb-2">
                                    <label for="description" class="form-label">Description:</label>
                                    <textarea type="text" class="form-control" name="description" id="description" placeholder="Insert description..." rows="3">{{ $comic->description }}</textarea>
                              </div>
                              <div class="mb-2">
                                    <label for="thumb" class="form-label">Thumb Url:</label>
                                    <input type="text" class="form-control" name="thumb" id="thumb" placeholder="Insert thumb url..." value="{{ $comic->thumb }}">
                              </div>

                              <p>I campi con * sono obbligatori</p>

                              <button type="submit" class="btn btn-warning">Aggiorna</button>

                              <a href="{{ route('comics.index') }}" class="btn btn-primary">
                                    Torna indietro
                              </a>

                        </form>

                  </div>
            </div>
            
@endsection