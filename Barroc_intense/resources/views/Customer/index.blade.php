@extends('layouts.app')

@section('content')
    <div class="home-page">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div id="home-card" class="card">
                        <div class="card-body">
                            <h1>Persoonlijke Informatie</h1>
                            <div class="info">
                                <p>Username</p>
                                <p></p>
                                <p></p>
                                <p></p>

                                <a class="btn btn-block btn-primary" href="#">Gegevens aanpassen</a>
                            </div>

                            <div class="but">
                                <a class="btn  btn-primary" href="#">Storing Melden</a>
                                <a class="btn btn-primary" href="#">Leasegegevens bekijken</a>
                                <a class="btn btn-primary" href="#">Contractgegevens bekijken</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
