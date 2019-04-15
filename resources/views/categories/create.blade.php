@extends('layouts.app')
@section('content')

<div class="container">
<form action="{{url('categories')}}" method ="POST">
          <h2>Create Category Form</h2>
          @csrf

	<div class="form-group" style="font-size:18px;"> <!-- Name field -->
		<label class="control-label " for="name">Name</label>
		<input class="form-control" id="name" name="name" type="text" required style="font-size:19px;"/>
	</div>
	
	<div class="form-group" style="font-size:18px;"> 
		<label class="control-label requiredField" for="description">Status</label>
		<input class="form-control" id="status" name="status" type="number" required style="font-size:19px;"/>
	</div>

	
	<div class="form-group">
		<button class="btn btn-primary " name="save" type="submit" value="save">Save</button>
	</div>
	
</form>	
</div>
@endsection