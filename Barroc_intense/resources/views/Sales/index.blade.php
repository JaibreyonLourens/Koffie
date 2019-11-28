@extends('layouts.app')

@section('content')
    <div class="home-page">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div id="home-card" class="card">
                        <div id="home-header" class="card-header"><h1>Sales</h1></div>

                        <div class="card-body">
                            <div class="home-text">
                                <div class="offerte">
                                <button class="btn  btn-primary">
                                    <a class="a-link" href="{{ route('offerte.index') }}">Offerte aanvragen</a>
                                </button>
                                <button class="btn  btn-primary">
                                    <a class="a-link" href="#">Openstaande offerte</a>
                                </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
