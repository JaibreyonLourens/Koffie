@extends('layouts.app')
@section('content')
    <div class="home-page">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-15">
                    <div id="home-card" class="card">
                        <div class="card-body">
                            <div class="card-body">
                                @foreach($orders as $orderid)
                                <form action="{{route('orders.update', $orderid->id)}}" method="POST">
                                @endforeach
                                    @method('put')
                                    @csrf

                                    @foreach($user->orders as $order)
                                        @foreach($supplies as $supply)
                                            @if($order->is_completed == 1)
                                                <p>Er zijn helaas nog geen bestellingen maak <a
                                                        href="{{route('inkoop.index')}}">hier</a> een bestelling</p>
                                            @else
                                                @if($supply->id == $order->supplies_id)
                                                    <div class="form-group">

                                                        <p>{{$order->supply->name}}
                                                            price: {{$order->supply->price}} </p>


                                                    </div>

                                                @endif
                                            @endif
                                        @endforeach

                                    @endforeach

                                    <p>Total: {{$total}}</p>

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
