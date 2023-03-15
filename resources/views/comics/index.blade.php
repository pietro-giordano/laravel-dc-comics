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
                              @foreach ($comics as $key => $comic)
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

                                          <button class="btn btn-danger modalButton">
                                                <i class="fa-solid fa-trash"></i>
                                          </button>
                                    </td>
                              </tr>

                              <div class="modale">
                                    <div class="modal-content">
                                          <p>Confermi di voler cancellare?</p>
                        
                                          <form action="{{ route('comics.destroy', $comic->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                
                                                <button type="submit" class="btn btn-danger">
                                                      Elimina
                                                </button>
                                          </form>
                        
                                          <button type="submit" class="btn btn-primary mt-2 noneButton">
                                                Annulla
                                          </button>
                                    </div>
                              </div>      

                              <script>
                                    document.getElementsByClassName("modalButton")[{{ $key }}].onclick = function () {
                                          document.getElementsByClassName("modale")[{{ $key }}].style.display = "block";
                                    }

                                    document.getElementsByClassName("noneButton")[{{ $key }}].onclick = function () {
                                          document.getElementsByClassName("modale")[{{ $key }}].style.display = "none";
                                    }

                                    window.onclick = function (event) {
                                          if (event.target == document.getElementsByClassName("modale")[{{ $key }}]) {
                                                document.getElementsByClassName("modale")[{{ $key }}].style.display = "none";
                                          }
                                    }
                              </script>
                              @endforeach
                        </tbody>
                  </table>
            </div>
      </div>
      
@endsection


