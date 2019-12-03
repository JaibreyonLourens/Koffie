@extends('layouts.app')
@section('content')
    <div class="home-page">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-15">
                    <div id="home-card" class="card">
                        <div class="card-body">
                            <div class="card-body">
                                <form action="{{route('orders.order')}}" method="post">
                                    @csrf
                                    @foreach($user->orders as $order)
                                        @foreach($supplies as $supply)
                                        @if($order->id == 0)
                                            <p>Er zijn helaas nog geen bestellingen maak <a href="{{route('inkoop.index')}}">hier</a> een bestelling</p>
                                            @else
                                        @if($supply->id == $order->supplies_id)
                                            <div class="form-group">
                                                <input type="hidden" value="{{$supply->id}}">
                                                <p>{{$supply->name}} </p>
                                                <p> {{$supply->price}}</p>
                                            </div>

                                            @endif
                                        @endif
                                            @endforeach
                                    @endforeach
                                    <div class="form-group">
                                        <input type="submit" value="Bestel producten">
                                    </div>


                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
