<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
      <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>LaravelComics</title>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            @vite('resources/js/app.js')
      </head>
      <body>

            <div class="overlay overflow-hidden">

                  <header>
                        <div class="row d-flex justify-content-center">
                              <div class="col-2">
                                    <img src="{{ Vite::asset('resources/img/DC_Comics_logo.svg') }}" alt="" class="w-100 rounded my-2">
                              </div>
                        </div>
                  </header>
      
                  <main>
                        @yield('content')
                  </main>
      
                  <footer>
                  </footer>

            </div>

      </body>
</html>
