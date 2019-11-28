@extends('app')

  @section('content')

      <div class="home-page">
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-md-8">
                      <div id="home-card" class="card">
                          <div class="card-header"><h1>Product</h1></div>
                          <div class="card-body">
                              <div class="home-text">
                                  <img src="{{URL::asset('/images/bit-deluxe.png')}}" alt="profile Pic" height="200"
                                       width="200">
                                  <h2>{{ $supplies->name }} </h2>
                                  <h2> Beschrijven: {{ $supplies->description }}</h2>
                                  <p>Per kilo{{ $supplies->price_per_unit }}</p>

                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  @endsection
