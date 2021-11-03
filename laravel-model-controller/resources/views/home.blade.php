<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Home</title>
</head>
<body>

    <div class="container">
    <h1 class="text-center p-5">Films</h1>
        <div class="row">
            @foreach ($movies as $movie) 
                <div class="col-3 pb-5 text-center">
                    <h3 class="pb-4">{{ $movie->title }} </h3>
                    <p><span class="text-danger">Titolo originale: </span> {{ $movie->original_title }} </p>
                    <p><span class="text-danger">Nazionalità: </span> {{ $movie->nationality }} </p>
                    <p><span class="text-danger">Data di uscita: </span>{{ $movie->date }}</p>
                    <p><span class="text-danger">Voto: </span>{{ $movie->vote }}</p>
                </div>
            
            @endforeach
        </div>
    </div>
        
   
    
    
</body>
</html>