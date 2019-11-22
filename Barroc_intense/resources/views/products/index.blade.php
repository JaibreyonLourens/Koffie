@extends('layouts.app')
@section('content')
    <div class="home-page">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div id="home-card" class="card">
                        <div class="card-body">
                            <h1>Product</h1>
                            <div class="home-text">
                                <img src="{{URL::asset('/images/bit-deluxe.png')}}" alt="profile Pic" height="200" width="200">
                                <h2>Beschrijven:</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Aperiam, assumenda at debitis error incidunt ipsam minima pariatur perspiciati quis velit voluptas voluptatum!
                                    Aliquid cum doloremque esse minus nobis ullam, voluptates!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
