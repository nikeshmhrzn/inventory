@extends('layouts.app')
@section('content')

<div class="container">
<h3><a href ="{{url('categories/create')}}">create categories</a></h3>


<table border="1" class="table table-striped" >

<thead  style="background-color:grey; font-size:18px;">
<tr>
<th>id</th>
<th>Name</th>
<th>Status</th>
<th>Action</th>


</tr>
</thead>

<tbody style="font-size:18px;">

<?php foreach($categories as $category){?>
    <tr>
<td> <?php echo $category->id;?></td>
<td> <?php echo $category->name;?></td>
<td> <?php echo $category->status;?></td>

<td>
<div class="row">
<div class="col-md-3">
 <a href=" {{url('categories/' .$category->id. '/edit')}}" button type="button" class="btn btn-success a">Edit</a></button>
</div>


<div class="col-md-9">
 <form action="{{url('categories/'.$category->id)}}" method="POST">
@csrf
@method('delete')

    <!-- <input type="submit" value="delete"> -->
    <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    </div>
    </div>
</td>
<?php }?>

</tr>
</tbody>
</table>
</div>
@endsection













<!-- @section('content1')
<h1>hello</h1>
@endsection -->