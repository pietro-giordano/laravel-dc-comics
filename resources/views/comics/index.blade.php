@extends('layouts.app')

@section('content')
      <div class="container">
            <div class="row">
                  <div class="col-2">
                        <a href="{{ route('comics.create') }}" class="btn btn-success">
                              Crea nuovo prodotto
                        </a>
                  </div>

                  <table class="table">
                        <thead>
                              <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Series</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Actions</th>
                              </tr>
                        </thead>
                        <tbody>
                              @foreach ($comics as $comic)
                              <tr>
                                    <th scope="row">{{ $comic->id }}</th>
                                    <td>{{ $comic->title }}</td>
                                    <td>{{ $comic->series }}</td>
                                    <td>{{ $comic->type }}</td>
                                    <td>
                                          <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">
                                                <i class="fa-solid fa-magnifying-glass"></i>
                                          </a>
                                          <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning">
                                                <i class="fa-solid fa-pen"></i>
                                          </a>
                                          <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-danger">
                                                <i class="fa-solid fa-trash"></i>
                                          </a>
                                    </td>
                              </tr>
                              @endforeach
                        </tbody>
                  </table>

            </div>
      </div>
@endsection


