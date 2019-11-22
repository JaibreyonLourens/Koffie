@extends('layouts.app')
@section('content')
    <div class="home-page">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div id="home-card" class="card">
                        <div class="card-body">

                            <h1>Inkoop</h1>

                            <div class="search-container">
                                <form action="">
                                    <input class="input-group-text" type="text" id="search"
                                           placeholder="Type to search users" autocomplete="off">
                                </form>
                                <button class="btn  btn-info"><i class="far fa-search"></i></button>
                            </div>


                            <div class="bestel">
                                <h2>orders</h2>
                                <div class="prodcut">
                                    <button class="btn  btn-info">x</button>
                                    <h4>prodcut</h4>
                                    <input class="input-group-text" type="text">
                                    <button class="btn  btn-info">+</button>
                                </div>
                                <div class="prodcut">
                                    <button class="btn  btn-info">x</button>
                                    <h4>prodcut</h4>
                                    <input class="input-group-text" type="text">
                                    <button class="btn  btn-info">+</button>
                                </div>
                                <div class="prodcut">
                                    <button class="btn  btn-info">x</button>
                                    <h4>prodcut</h4>
                                    <input class="input-group-text" type="text">
                                    <button class="btn  btn-info">+</button>
                                </div>
                                <div class="prodcut">
                                    <button class="btn  btn-info">x</button>
                                    <h4>prodcut</h4>
                                    <input class="input-group-text" type="text">
                                    <button class="btn  btn-info">+</button>
                                </div>
                                <div class="prodcut">
                                    <button class="btn  btn-info">x</button>
                                    <h4>prodcut</h4>
                                    <input class="input-group-text" type="text">
                                    <button class="btn  btn-info">+</button>
                                </div>
                            </div>
                            <button class="btn  btn-info">order</button>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
