<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">

        <title>FocusBeer</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <a href="/">Torna alla Home</a>
        <div class="beerFocus">
         <h1>{{$beer->brand}}</h1>
         <img class="img-resizeFocus"src="{{$beer->beerImg}}" alt="">
         <div class="typeFont">{{$beer->type}}</div>
         <div>{{$beer->alcoholLevel}}</div>
         <div>{{$beer->ibu}}</div>
         <div class="colorBox" style="background-color:{{$beer->color}};">Color</div>
         <div class="typeFont">Description:</div>
         <p>{{$beer->description}}</p>
        </div>
    </body>
</html>
