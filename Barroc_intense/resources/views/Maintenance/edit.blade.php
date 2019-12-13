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

                                </select>

                                <label for="textInput">Aantal gebruikt</label>
                                <input type="number" name="amount" id="numberInput" class="form-control mb-4" placeholder="Aantal gebruikt">


                                <label for="textarea">Beschrijving </label>
                                <textarea id="textarea" name="description" class="form-control mb-4" placeholder="Beschrijving"></textarea>

                                <button class="btn btn-dark btn-block" type="submit">Werkbon Versturen</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection