@extends('layouts.app')
@section('content')

<style>

a{
    text-decoration:none;
}


</style>
<div class="container">
<h3><a href ="{{url('products/create')}}">create product</a></h3>


<table border="1" class="table table-striped" >

<thead  style="background-color:grey; font-size:18px;">
<tr>
<th>id</th>
<th>Name</th>
<th>Description</th>
<th>Category</th>
<th>Price</th>
<th>Action</th>

</tr>
</thead>

<tbody style="font-size:18px;">

<?php foreach($products as $product){?>
    <tr>
<td> <?php echo $product->id;?></td>
<td> <?php echo $product->name;?></td>
<td> <?php echo $product->description;?></td>
<td> <?php echo $product->category->name;?></td>
<td> <?php echo $product->price;?></td>
<!-- <td><a href="#">edit</a> |
<a href="#">delete</a></td> -->

<td>
<div class="row">
<div class="col-md-3">
 <a href=" {{url('products/' .$product->id. '/edit')}}" button type="button" class="btn btn-success a">Edit</a></button>
<!-- <a href="{{url('products/' .$product->id. '/edit')}}">Edit</a> -->
</div>

<div class="col-md-9">
<form action="{{url('products/'.$product->id)}}" method="POST">
@csrf
@method('delete')

    <!-- <input type="submit" value="delete"> -->
    <button type="submit" class="btn btn-danger">Delete</button>
    </form>

    </div>
    </div>
    </div>
</td>

<!-- <td> <button type="success">edit</button></td> -->

<?php }?>

</tr>
</tbody>
</table>
</div>
@endsection
<!-- @section('content1')
<h1>hello</h1>
@endsection -->