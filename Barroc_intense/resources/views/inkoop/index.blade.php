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
                                    <input type="submit" name="submitbtn" value="search">
                                    <input type="submit" name="submitbtn" value="clear">
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
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <th scope="row">{{$product->id}}</th>
                                        <td><a href="{{route('inkoop.edit', $product->id)}}">{{$product->name}}</a></td>
                                        <td>{{$product->price}}</td>
                                        <td>{{$product->units}}
                                        </td>
                                        <td>
                                            @if($product->available === 1)
                                                <p class="text-success">beschikbaar</p>
                                            @else
                                               <p class="text-danger">niet beschikbaar</p>
                                            @endif
                                        </td>
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
