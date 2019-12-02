@extends('layouts.app')
@section('content')
    <div class="home-page">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-15">
                    <div id="home-card" class="card">
                        <div class="card-body">
                            <div class="card-body">



{{--                                <table class="table">--}}
{{--                                    <thead>--}}
{{--                                    <tr>--}}
{{--                                        <th scope="col">#</th>--}}
{{--                                        <th scope="col">Naam</th>--}}
{{--                                        <th scope="col">Toevoge</th>--}}
{{--                                    </tr>--}}
{{--                                    </thead>--}}
{{--                                    <tbody>--}}

{{--                                    @foreach($products as $product)--}}
{{--                                        <tr>--}}
{{--                                            <th scope="row">{{$product->id}}</th>--}}
{{--                                            <td><a href="{{route('inkoop.edit', $product->id)}}">{{$product->name}}</a></td>--}}
{{--                                            <td>--}}
{{--                                            @if($product->available != 1)--}}
{{--                                            @else--}}
{{--                                                <td>--}}
{{--                                                    <div class="">--}}
{{--                                                        <input type="number" class="_3LziH" value="1">--}}
{{--                                                    </div>--}}
{{--                                                </td>--}}
{{--                                            @endif--}}
{{--                                        </tr>--}}
{{--                                    @endforeach--}}
{{--                                    </tbody>--}}
{{--                                </table>--}}


                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

