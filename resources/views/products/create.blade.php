@extends('layouts.app')

@section('content')

<div class="container">

<form action="{{url('products')}}" method ="POST">
<h2>Create Form</h2>
@csrf

<div class="form-group">

        <label for="name">Name</label>
        <input type="text" name="name">
        </div>


<div class="form-group">

<label for="description">Description</label>
<input type="text" name="description">
</div>

<div class="form-group">

<label for="price">Price</label>
<input type="number" name="price">
</div>


<div class="form-group">

<label for="price">category</label>
<input type="number" name="category_id">
</div>

<div class="form-group">
<input type="submit" value="save">
</div>
</form>

</div>

<!-- <h4>this is crerate file of products</h4> -->
@endsection