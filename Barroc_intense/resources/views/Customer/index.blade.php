@extends('layouts.app')
@section('content')
    <div class="content">
     <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" >
                <div class="card-header" style="background-color:#ffbf00" >Persoonlijke informatie</div>
                <div class="card-body row" style="">

                    <p>Naam: {{$user->name}}</p>
                    <p>Email {{$user->email}}</p>
                    <ul class="list-group" style="max-height:300px; overflow-y: scroll;">

                        <li class="list-group-item list-group-item-dark" style="margin: 5px; background-color: #343a40"><a href="" class="text-white">Factuur</a></li>
                        <li class="list-group-item list-group-item-dark" style="margin: 5px; background-color: #343a40"><a href="" class="text-white">Factuur</a></li>
                        <li class="list-group-item list-group-item-dark" style="margin: 5px; background-color: #343a40"><a href="" class="text-white">Factuur</a></li>
                        <li class="list-group-item list-group-item-dark" style="margin: 5px; background-color: #343a40"><a href="" class="text-white">Factuur</a></li>
                        <li class="list-group-item list-group-item-dark" style="margin: 5px; background-color: #343a40"><a href="" class="text-white">Factuur</a></li>
                        <li class="list-group-item list-group-item-dark" style="margin: 5px; background-color: #343a40"><a href="" class="text-white">Factuur</a></li>
                        <li class="list-group-item list-group-item-dark" style="margin: 5px; background-color: #343a40"><a href="" class="text-white">Factuur</a></li>

                    </ul>
                    <a href="{{route('maintenance.create')}}" class="text-white">Storing</a>
                </div>
            </div>
        </div>
     </div>
    </div>
@endsection
