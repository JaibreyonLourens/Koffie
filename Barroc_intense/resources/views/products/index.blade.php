<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>Document</title>
</head>
<body>
    <div class="product">
    <h1>Product</h1>
{{--    <button>interesse? vraag een offerte aan</button>--}}
    <img src="{{URL::asset('/images/bit-deluxe.png')}}" alt="profile Pic" height="200" width="200">
    <h2>Beschrijven:</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, assumenda at debitis error incidunt ipsam minima pariatur perspiciatis quis velit voluptas voluptatum! Aliquid cum doloremque esse minus nobis ullam, voluptates!</p>
    </div>
</body>
</html>

