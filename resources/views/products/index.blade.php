@extends('layouts.app')
@section('content')
<div class="container">
<h3><a href ="{{url('products/create')}}">create product</a></h3>


<table border="1">


<tr>

<th>id</th>
<th>Name</th>

<th>Description</th>
<th>Category</th>
<th>Price</th>
<th>Action</th>

</tr>


<?php foreach($products as $product){?>
    <tr>
<td> <?php echo $product->id;?></td>
<td> <?php echo $product->name;?></td>
<td> <?php echo $product->description;?></td>
<td> <?php echo $product->category_id;?></td>
<td> <?php echo $product->price;?></td>
<!-- <td><a href="#">edit</a> |
<a href="#">delete</a></td> -->

<td>
<a href="{{url('products/' .$product->id. '/edit')}}">Edit</a>

<form action="{{url('products/'.$product->id)}}" method="POST">
@csrf
@method('delete')
    <input type="submit" value="delete">
    </form>
</td>

<!-- <td> <button type="success">edit</button></td> -->

<?php }?>

</tr>
</table>
</div>
@endsection
<!-- @section('content1')
<h1>hello</h1>
@endsection -->