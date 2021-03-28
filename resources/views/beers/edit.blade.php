<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">

        <title>EditBeer</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <form class="formStore" action="{{  route('beers.update', compact('beer')) }}" method="post">

            @csrf

            @method('PUT')

            <div class="form-group">
                <label for="brand">Brand</label>
                <br>
                <input type="text" name="brand" placeholder="brand" value="{{$beer->brand}}">
            </div>
            <div class="form-group">
                <label for="beerImg">Link beer Img</label>
                <br>
                <input type="text" name="beerImg" placeholder="link beer Img" value="{{$beer->beerImg}}">
            </div>
            <div class="form-group">
                <label for="type">Type</label>
                <br>
                <input type="text" name="type" placeholder="type" value="{{$beer->type}}">
            </div>
            <div class="form-group">
                <label for="alcoholLevel">Alcohol Level</label>
                <br>
                <input type="text" name="alcoholLevel" placeholder="alcohol level" value="{{$beer->alcoholLevel}}">
            </div>
            <div class="form-group">
                <label for="ibu">IBU</label>
                <br>
                <input type="text" name="ibu" placeholder="IBU" value="{{$beer->ibu}}">
            </div>
            <div class="form-group">
                <label for="color">Color</label>
                <br>
                <input type="text" name="color" placeholder="Color" value="{{$beer->color}}">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <br>
                <input type="text" name="description" placeholder="Description" value="{{$beer->description}}">
            </div>
            <input type="submit" value="invia">
          </form>
    </body>
</html>
