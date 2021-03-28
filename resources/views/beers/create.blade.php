<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
        <script src="{{ asset('js/app.js')}}"></script>

        <title>CreateBeer</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <form class="formStore" action="{{route('beers.store')}}" method="post">

            @csrf
            @method('POST')

            <div class="form-group">
                <label for="brand">Brand</label>
                <input class="form-controll {{ $errors->has('brand') ? 'is-invalid' : ''}}" type="text" name="brand" placeholder="brand" >
                <div class="invalid-feedback">
                    {{$errors->first('brand')}}
                </div>
            </div>

            <div class="form-group">
                <label for="beerImg">Link beer Img</label>
                <input class="form-controll {{ $errors->has('beerImg') ? 'is-invalid' : ''}}" type="text" name="beerImg" placeholder="beerImg" >
                <div class="invalid-feedback">
                    {{$errors->first('beerImg')}}
                </div>
            </div>
            <div class="form-group">
                <label for="type">Type</label>
                <input class="form-controll {{ $errors->has('type') ? 'is-invalid' : ''}}" type="text" name="type" placeholder="type" >
                <div class="invalid-feedback">
                    {{$errors->first('type')}}
                </div>
            </div>
            <div class="form-group">
                <label for="alcoholLevel">Alcohol Level</label>
                <input class="form-controll {{ $errors->has('alcoholLevel') ? 'is-invalid' : ''}}" type="text" name="alcoholLevel" placeholder="alcoholLevel" >
                <div class="invalid-feedback">
                    {{$errors->first('alcoholLevel')}}
                </div>
            </div>
            <div class="form-group">
                <label for="ibu">IBU</label>
                <input class="form-controll {{ $errors->has('ibu') ? 'is-invalid' : ''}}" type="text" name="ibu" placeholder="ibu" >
                <div class="invalid-feedback">
                    {{$errors->first('ibu')}}
                </div>
            </div>
            <div class="form-group">
                <label for="color">Color</label>
                <input class="form-controll {{ $errors->has('color') ? 'is-invalid' : ''}}" type="text" name="color" placeholder="color" >
                <div class="invalid-feedback">
                    {{$errors->first('color')}}
                </div>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input class="form-controll {{ $errors->has('description') ? 'is-invalid' : ''}}" type="text" name="description" placeholder="description" >
                <div class="invalid-feedback">
                    {{$errors->first('description')}}
                </div>
            </div>
            <input type="submit" value="invia">
          </form>
    </body>
</html>
