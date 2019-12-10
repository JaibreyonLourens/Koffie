@extends('layouts.app')


@section('content')
    <div class="content">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" >
                    <div class="card-header" style="background-color:#ffbf00" >Werkbon Aanmaken</div>
                    <div class="card-body " style="">
                        <div class="">
                            <form action="{{ route('maintenance.store' )}}" method="post" class="border border-light p-5">
                                @csrf

                                <p class="h4 mb-4 text-center">Storing</p>
                                <input type="hidden"  name="user_id" value="{{$id = \Auth::user()->id}}">


                                <label for="textarea">Omschrijving Storing</label>
                                <textarea id="textarea" name="description" class="form-control mb-4" placeholder="Omschrijving Storing"></textarea>

                                <input class="btn btn-info btn-block" type="submit" value="Meld Storing">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
