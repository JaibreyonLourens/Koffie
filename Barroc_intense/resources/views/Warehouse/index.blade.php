@extends('app')
@section('content')
<main>
    <h2>Magazijn</h2>
    <div class="products">
        <form action="{{route('WarehouseController')}}" method="post" enctype="multipart/form-data">
            <div class="product">
                <p>product</p> <input type="text" name="amount">
            </div>
        </form>

    </div>    
</main>
@endsection
