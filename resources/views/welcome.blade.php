<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
      <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>LaravelComics</title>
            @vite('resources/js/app.js')
      </head>
      <body>

            <div class="card-container">
                  @foreach ($comics as $comic)
                        <div class="card">
                              <img src="{{ Vite::asset($comic['thumb']) }}" alt="{{ $comic['series'] }}">
                              <p>{{ $comic['series'] }}</p>
                        </div>   
                  @endforeach
            </div>

      </body>
</html>
