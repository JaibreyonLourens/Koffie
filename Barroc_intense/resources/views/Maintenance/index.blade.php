@extends('layouts.app')
@section('content')
<div class="content">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" >
                <div class="card-header" style="background-color:#ffbf00" >Maintenance Dashboard</div>
                <div class="card-body row" style="">
                    <div class="col-md-4" >
                        <ul class="list-group" style="max-height:300px; overflow-y: scroll;">
                        @foreach($workorders as $workorder)
                            <li class="list-group-item list-group-item-dark" style="margin: 5px; background-color: #343a40"><a href="{{route('maintenance.edit', $id = $workorder->id)}}" class="text-white">Storing</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-md-8">

                            <a href="{{route('maintenance.show',$id = 1)}}" class="btn btn-dark">Agenda</a>
                            <a href="{{route('maintenance.create')}}" class="btn btn-dark">Storing Opgeven</a>


                    </div>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
