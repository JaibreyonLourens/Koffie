@extends('layouts.app')
@section('content')
    <div class="content">
     <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" >
                <div class="card-header" style="background-color:#ffbf00" >Persoonlijke informatie</div>
                <div class="card-body row" style="">

                    <div class="info">
                        <p>Naam: {{$user->name}}</p>
                        <p>Email {{$user->email}}</p>
                    </div>
                    <ul class="list-group " style="max-height:300px; overflow-y: scroll; horiz-align: right">

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
