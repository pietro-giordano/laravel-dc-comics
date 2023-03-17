@extends('layouts.app')

@section('content')
      <div class="container">
            <h1 class="text-center">Update comic #{{ $comic->id }}</h1>
            
            <div class="row mb-3">
                  <div class="col-3"></div>
                  <div class="col-6">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                              <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                              </ul>
                        </div>
                        @endif

                        <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="POST">
                              @csrf
                              @method('PUT')

                              <div class="mb-2">
                                    <label for="title" class="form-label @error('title') text-danger @enderror">Title: *</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" required minlength="5" maxlength="255" placeholder="Insert title..." value="{{ old('title', $comic->title) }}">
                                    @error('title')
                                          <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                              </div>
                              <div class="mb-2">
                                    <label for="series" class="form-label @error('series') text-danger @enderror">Series: *</label>
                                    <input type="text" class="form-control @error('series') is-invalid @enderror" name="series" id="series" required minlength="5" maxlength="255" placeholder="Insert series..." value="{{ old('series' $comic->series) }}">
                                    @error('series')
                                          <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                              </div>
                              <div class="mb-2">
                                    <label for="type" class="form-label @error('type') text-danger @enderror">Type: *</label>
                                    <input type="text" class="form-control @error('type') is-invalid @enderror" name="type" id="type" required minlength="5" maxlength="255" placeholder="Insert type..." value="{{ old('type' $comic->type) }}">
                                    @error('type')
                                          <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                              </div>
                              <div class="mb-2">
                                    <label for="sale_date" class="form-label @error('sale_date') text-danger @enderror">Sale date: *</label>
                                    <input type="date" class="form-control @error('sale_date') is-invalid @enderror" name="sale_date" id="sale_date" required min="2000-01-01" max="2024-12-12" value="{{ old('sale_date' $comic->sale_date) }}">
                                    @error('sale_date')
                                          <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                              </div>
                              <div class="mb-2">
                                    <label for="price" class="form-label @error('price') text-danger @enderror">Price: *</label>
                                    <input type="number" class="form-control @error('price') is-invalid @enderror" name="price" id="price" required min="1" max="999" step="0.01" placeholder="Insert price..." value="{{ old('price' $comic->price) }}">
                                    @error('price')
                                          <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                              </div>
                              <div class="mb-2">
                                    <label for="description" class="form-label @error('description') text-danger @enderror">Description:</label>
                                    <textarea type="text" class="form-control @error('description') is-invalid @enderror" name="description" id="description" placeholder="Insert description..." rows="3">{{ old('description' $comic->description) }}</textarea>
                                    @error('description')
                                          <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                              </div>
                              <div class="mb-2">
                                    <label for="thumb" class="form-label @error('thumb') text-danger @enderror">Thumb Url:</label>
                                    <input type="text" class="form-control @error('thumb') is-invalid @enderror" name="thumb" id="thumb" placeholder="Insert thumb url..." value="{{ old('thumb' $comic->thumb) }}">
                                    @error('thumb')
                                          <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
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