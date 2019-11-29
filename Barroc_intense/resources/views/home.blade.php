@extends('layouts.app')

@section('content')
    <div class="home-page">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div id="home-card" class="card">
                        <div id="home-header" class="card-header"><h1>Welkom bij Barroc Intense</h1></div>

                        <div class="card-body">
                            <h2>Over ons</h2>
                            <div class="home-text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad amet commodi consequatur
                                    deleniti, dolore doloribus esse iste magnam maiores maxime molestiae nihil officia
                                    quam quasi qui sapiente totam ullam velit Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Aliquid aspernatur, dolore dolores dolorum, error fuga laboriosam,
                                    laborum libero minima officia provident quaerat quasi qui quo reiciendis repudiandae
                                    tempora tenetur? Porro?</p>
                            </div>
                            <hr>
                            <div class="products">



                                <a class="nav-link" href="{{ route('products.index') }}">
                                    <img src="{{URL::asset('/images/bit-deluxe.png')}}" alt="profile Pic" height="90"
                                         width="90">
                                    <h2></h2>
                                    <p>Per kilo</p>
                                </a>

                                <a href="{{ route('products.index') }}">
                                    <img src="{{URL::asset('/images/bit-deluxe.png')}}" alt="profile Pic" height="90"
                                         width="90">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                </a>

                                <a href="{{ route('products.index') }}">
                                    <img src="{{URL::asset('/images/bit-deluxe.png')}}" alt="profile Pic" height="90"
                                         width="90">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                </a>

                                <a href="{{ route('products.index') }}">
                                    <img src="{{URL::asset('/images/bit-deluxe.png')}}" alt="profile Pic" height="90"
                                         width="90">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
