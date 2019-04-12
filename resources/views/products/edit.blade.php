@extends('layouts.app')

@section('content')

<div class="container">

<form action="{{url('products/'.$product->id)}}" method ="POST">
<h2>edit product</h2>
        @csrf
            @method('patch')

<div class="form-group">

        <label for="name">Name</label>
        <input type="text" name="name" value="{{$product->name}}">
        </div>


<div class="form-group">

<label for="description">Description</label>
<input type="text" name="description" value="{{$product->description}}">
</div>

<div class="form-group">

<label for="price">Price</label>
<input type="number" name="price" value="{{$product->price}}">
</div>


<div class="form-group">

<label for="price">category</label>
<input type="number" name="category_id" value="{{$product->category_id}}">
</div>

<div class="form-group">
<input type="submit" value="save">
</div>
</form>

</div>

<!-- <h4>this is crerate file of products</h4> -->
@endsection