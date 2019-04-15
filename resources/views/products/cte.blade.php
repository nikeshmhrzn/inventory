@extends('layouts.app')
@section('content')

<div class="container">
<form action="{{url('products/'.$product->id)}}" method ="POST">
          <h2>Edit Product Form</h2>

					@csrf
            @method('patch')


	<div class="form-group"> <!-- Name field -->
		<label class="control-label " for="name">Name</label>
		<input class="form-control" id="name" name="name" type="text"  value="{{$product->name}}"/>
	</div>
	
	<div class="form-group"> <!-- Description field -->
		<label class="control-label requiredField" for="description">Description</label>
		<input class="form-control" id="description" name="description" type="text" value="{{$product->description}}"/>
	</div>
	
	<div class="form-group"> <!-- Subject field -->
		<label class="control-label " for="price">Price</label>
		<input class="form-control" id="price" name="price" type="number" value="{{$product->price}}"/>
	</div>
	
	<div class="form-group"> <!-- Message field -->
		<label class="control-label " for="category">Category</label>
    <input class="form-control" id="category" name="category_id" type="number" value="{{$product->category_id}}"/>
	
	</div>
	
	<div class="form-group">
		<button class="btn btn-primary " name="save" type="submit" value="save">Save</button>
	</div>
	
</form>	
</div>
@endsection