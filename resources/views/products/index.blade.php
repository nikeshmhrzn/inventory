<h1>hello</h1>

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

<td> <?php echo $product->id;?></td>
<td> <?php echo $product->name;?></td>
<td> <?php echo $product->description;?></td>
<td> <?php echo $product->category;?></td>
<td> <?php echo $product->price;?></td>

<?php }?>

</table>
