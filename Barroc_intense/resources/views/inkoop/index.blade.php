@extends('layouts.app')
@section('content')
    <div class="home-page">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-15">
                    <div id="home-card" class="card">
                        <div class="card-body">
                            <form action="{{route('supplies.filter')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="name">
                                    <input class="btn btn-light" type="submit" name="submitbtn" value="search">
                                    <input class="btn btn-light" type="submit" name="submitbtn" value="clear">
                                </div>

                                <div class="form-group">
                                    <input type="radio" value="enough" name="enough"> Beschikbaar
                                    <input type="radio" value="to-little" name="enough"> Niet Beschikbaar
                                </div>

                                <div class="form-group">
                                </div>

                            </form>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Naam</th>
                                    <th scope="col">Prijs</th>
                                    <th scope="col">Voorraad</th>
                                    <th scope="col">Beschikbaar</th>
                                    <th scope="col">Toevoegen </th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($products as $product)
                                    <tr>
                                        <th scope="row">{{$product->id}}</th>
                                        <form action="{{route('orders.store', ['product' => $product->id])}}" method="post">
                                            @csrf

                                                <td>
                                                    <a href="{{route('inkoop.edit', $product->id)}}">{{$product->name}}</a>
                                                </td>
                                                <td>{{$product->price}}</td>
                                                <td>{{$product->units}}</td>
                                                <td>
                                                    @if($product->available === 1)
                                                        <p class="text-success">beschikbaar</p>
                                                    @else
                                                        <p class="text-danger">niet beschikbaar</p>
                                                    @endif
                                                </td>

                                                <td>
                                                    <input type="hidden" name="product" value="{{$product->id}}">
                                                    <input class="btn btn-secondary" type="submit" value="+">
                                                </td>

                                            
                                        </form>
                                    </tr>
                                @endforeach
                                </tbody>
                                <a class="btn btn-primary" href="{{route('orders.index')}}">ga naar de bestelde producten</a>
                            </table>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
