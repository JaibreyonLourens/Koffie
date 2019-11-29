@extends('layouts.app')
@section('content')
    <div class="content">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" >
                    <div class="card-header" style="background-color:#ffbf00" >Werkbon</div>
                    <div class="card-body " style="">
                        <div class="">
                            <form class="border border-light p-5">
                                @csrf
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