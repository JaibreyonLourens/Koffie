@extends('layouts.app')
@section('content')
    <h1>Edit Product</h1>
    <form action="{{ route('inkoop.update', $user->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="">name</label>
            <input name="name" type="text" value="{{$supplies->name}}">
        </div>

        <div class="form-group">
            <label for="">price</label>
            <input type="text" name="price" value="{{ $product->price }}" id="">
        </div>

        <div class="form-group">
            <label for="">categorie</label>
            <select name="categorie_id" id="">
                @foreach($categories as $category)
                    <option
                        @if ($product->category->id == $category->id) selected @endif
                    value="{{$category->id}}">
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <input type="submit" value="Edit Product">
    </form>
@endsection
