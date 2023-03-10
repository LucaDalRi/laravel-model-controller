<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel 9 + Bootstrap Template</title>

        {{-- Includiamo gli assets con la direttiva @vite --}}
        @vite('resources/js/app.js')
    </head>
    <body>

        <div class="container1">
            @foreach ($Movies as $Movie)
            <div class="card">
                <p>
                    <strong>Titolo:</strong>  {{ $Movie->title }}
                </p>
                <hr>
                <p>
                    <strong>Titolo originale:</strong>  {{ $Movie->original_title }}
                </p>
                <hr>
                <p>    
                    <strong>Nazionalità:</strong>  {{ $Movie->nationality }}
                </p>
                <hr>
                <p>
                    <strong>Data Uscita:</strong>  {{ $Movie->date }}
                </p>
                <hr>
                <p>
                   <strong>Voto:</strong>  {{ $Movie->vote }}
                </p>
            </div>
            @endforeach
        </div>

    </body>
</html>
