<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <div class="container">
        <div class="row gap-5">
            @foreach ($movies as $item)
            <div class="card col-3">
                <div class="card-body">
                  <h5 class="card-title">{{$item['title']}}</h5>
                  <h6 class="card-subtitle mb-2 text-muted">{{$item['title']}}</h6>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="card-link">Card link</a>
                  <a href="#" class="card-link">Another link</a>
                </div>
              </div>
            @endforeach
        </div>
    </div>
    <h1>
        ciao
    </h1>

</body>

</html>