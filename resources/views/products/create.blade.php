@extends('layouts.app')
@section('content')

<div class="container">
<form action="{{url('products')}}" method ="POST">
          <h2>Create Product Form</h2>
          @csrf

	<div class="form-group" style="font-size:18px;"> <!-- Name field -->
		<label class="control-label " for="name">Name</label>
		<input class="form-control" id="name" name="name" type="text" required style="font-size:19px;"/>
	</div>
	
	<div class="form-group" style="font-size:18px;"> <!-- Description field -->
		<label class="control-label requiredField" for="description">Description</label>
		<input class="form-control" id="description" name="description" type="text" required style="font-size:19px;"/>
	</div>


        <div class="form-group" style="font-size:18px;"> <!-- Message field -->
		<label class="control-label " for="category">Category</label>
    <!-- <input class="form-control" id="category" name="category_id" type="number" required style="font-size:19px;"/>
		
		 -->
		 <select name="category_id" id="">
		 
		 @foreach($categories as $category)
		 <option value="{{$category->id}}">{{ $category->name}}</option>
		 @endforeach
		 </select>
		</div>
	
	<div class="form-group" style="font-size:18px;"> <!-- Subject field -->
		<label class="control-label " for="price">Price</label>
		<input class="form-control" id="price" name="price" type="number" required style="font-size:19px;"/>
	</div>
	

	
	<div class="form-group">
		<button class="btn btn-primary " name="save" type="submit" value="save">Save</button>
	</div>
	
</form>	
</div>
@endsection