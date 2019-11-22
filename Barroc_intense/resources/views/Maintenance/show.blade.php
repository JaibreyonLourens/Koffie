@extends('layouts.app')
@section('content')
    <div class="content">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" >
                    <div class="card-header" style="background-color:#ffbf00" >Werkbon Aanmaken</div>
                    <div class="card-body " style="">
                        <div class="">
                            <form class="border border-light p-5">




                                <label for="textInput">Storing Nummer</label>
                                <input type="text" id="textInput" class="form-control mb-4" placeholder="Storing Nummer" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAAPhJREFUOBHlU70KgzAQPlMhEvoQTg6OPoOjT+JWOnRqkUKHgqWP4OQbOPokTk6OTkVULNSLVc62oJmbIdzd95NcuGjX2/3YVI/Ts+t0WLE2ut5xsQ0O+90F6UxFjAI8qNcEGONia08e6MNONYwCS7EQAizLmtGUDEzTBNd1fxsYhjEBnHPQNG3KKTYV34F8ec/zwHEciOMYyrIE3/ehKAqIoggo9inGXKmFXwbyBkmSQJqmUNe15IRhCG3byphitm1/eUzDM4qR0TTNjEixGdAnSi3keS5vSk2UDKqqgizLqB4YzvassiKhGtZ/jDMtLOnHz7TE+yf8BaDZXA509yeBAAAAAElFTkSuQmCC&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;">

                                <label for="select">Gebruikte producten</label>
                                <select class="browser-default custom-select mb-4" id="select">
                                    <option value="" disabled="" selected="">producten</option>
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                </select>

                                <label for="textInput">Aantal gebruikt</label>
                                <input type="number" id="numberInput" class="form-control mb-4" placeholder="Aantal gebruikt">


                                <label for="textarea">Beschrijving </label>
                                <textarea id="textarea" class="form-control mb-4" placeholder="Beschrijving"></textarea>

                                <button class="btn btn-dark btn-block" type="submit">Werkbon Versturen</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection