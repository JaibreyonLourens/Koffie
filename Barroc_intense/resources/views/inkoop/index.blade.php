@extends('layouts.app')
@section('content')
    <div class="home-page">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-15">
                    <div id="home-card" class="card">
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Naam</th>
                                    <th scope="col">Prijs</th>
                                    <th scope="col">Voorraad</th>
                                    <th scope="col">Beschikbaar</th>
                                    <th scope="col">Toevoge</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($products as $product)
                                    <tr>
                                        <th scope="row">{{$product->id}}</th>
                                        <form action="{{route('inkoop.store', ['product' => $product->id])}}" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <td>
                                                    <a href="{{route('inkoop.edit', $product->id)}}">{{$product->name}}</a>
                                                </td>
                                                <td>{{$product->price}}</td>
                                                <td>{{$product->units}}</td>
                                                <td>
                                                    @if($product->available === 1)
                                                    @else
                                                        niet beschikbaar
                                                    @endif
                                                </td>

                                                <td>
                                                @if($product->available != 1)
                                                @else
                                                    <td>
                                                        <input class="add" type="submit" value="+">
                                                    </td>
                                                @endif
                                            </div>
                                        </form>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
