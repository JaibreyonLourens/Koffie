@extends('layouts.app')

@section('content')
    <div class="home-page">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div id="home-card" class="card">
                        <div id="home-header" class="card-header"><h1>Offerte</h1></div>

                        <div class="card-body">
                            <div class="home-text">
                                <div class="form">
                                    <input type="text" placeholder="Naam" name="name" required>
                                    <input type="text" placeholder="Enter Email" name="email"
                                           required>
                                    <input type="text" placeholder="Adres" name="adres"
                                           required>
                                    <input type="text" placeholder="Postcode" name="postcode"
                                           required>
                                    <input type="text" placeholder="Stad" name="stad" required>
                                    <div class="1">
                                        <select>
                                            <option value="volvo">Volvo</option>
                                            <option value="saab">Saab</option>
                                            <option value="opel">Opel</option>
                                            <option value="audi">Audi</option>
                                        </select>
                                        <label>
                                            <input type="checkbox" checked="checked"
                                                   name="remember"
                                                   style="margin-bottom:15px"> Quantity
                                        </label>
                                    </div>

                                    <input type="text" placeholder="Prijs" name="prijs"
                                           required>


                                    <button type="button">Verstuur</button>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
