@extends('layouts.app')


@section('content')
    <div class="content">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" >
                    <div class="card-header" style="background-color:#ffbf00" >Werkbon Aanmaken</div>
                    <div class="card-body " style="">
                        <div class="">
                            <form action="{{ route('maintenance.store')}}" method="post" class="border border-light p-5">
                                @csrf

                                <p class="h4 mb-4 text-center">Storing</p>
                                <input type="hidden"  name="user_id" value="{{session('id')}}">


                                <label for="textInput">Type Storing</label>
                                <input type="text" id="textInput" name="type" class="form-control mb-4" placeholder="Type Storing" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAAPhJREFUOBHlU70KgzAQPlMhEvoQTg6OPoOjT+JWOnRqkUKHgqWP4OQbOPokTk6OTkVULNSLVc62oJmbIdzd95NcuGjX2/3YVI/Ts+t0WLE2ut5xsQ0O+90F6UxFjAI8qNcEGONia08e6MNONYwCS7EQAizLmtGUDEzTBNd1fxsYhjEBnHPQNG3KKTYV34F8ec/zwHEciOMYyrIE3/ehKAqIoggo9inGXKmFXwbyBkmSQJqmUNe15IRhCG3byphitm1/eUzDM4qR0TTNjEixGdAnSi3keS5vSk2UDKqqgizLqB4YzvassiKhGtZ/jDMtLOnHz7TE+yf8BaDZXA509yeBAAAAAElFTkSuQmCC&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;">

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
