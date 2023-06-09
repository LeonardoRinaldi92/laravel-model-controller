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
        <div class="row gap-3 justify-content-around">
            @foreach ($movies as $item)
            <div class="card col-5">
                <div class="card-body">
                  <h5 class="card-title">{{$item->title}}</h5>
                  <h6 class="card-subtitle mb-2 text-muted">{{$item->original_title}}</h6>
                  <p class="card-text">Nationality: <b>{{$item->nationality}}</b></p>
                  <span class="card-text">Year: <b>{{$item->date}}</b></span>
                  <span class="card-text">Vote: <b>{{$item->vote}}</b></span>
                </div>
              </div>
            @endforeach
        </div>
    </div>

</body>

</html>