
  		<div class="col-md-10 content">
  			  <div class="panel ">
	<div class="panel-heading text-center">
		<h3>View All Product</h3>
	</div>
	<div class="panel-body">
		
		
		<?php if($products){  ?>
	
		
		<table class="table table-bordered"> 
		
		<thead> 
		
			<th>Name</th>
			<th>Price</th>
			<th>Description</th>
			<th>Picture</th>
			<th>Edit</th>
			<th>Delete</th>
			
			
		</thead>
		<tr>
			<?php  foreach($products as $row){ ?>
			<td><?=$row['product_name']?></td>
			<td><?=$row['product_price']?></td>
			<td><?=$row['product_description']?></td>
			<td><img style="width:50px;height:50;" src="<?=base_url()?>img/<?=$row['picture']?>"  /></td>
			<td><a href="<?=base_url()?>Admin/edit_product/<?=$row['p_id']?>"><button class="btn btn-primary">Edit</button></a></td>
			<td><a href="<?=base_url()?>Admin/delete_product/<?=$row['p_id']?><button class="btn btn-danger">Delete</button></a></td>
			
			
		</tr>
		<?php }  } ?>
		</table>
		
		<?=$this->pagination->create_links();?>
	</div>
</div>
  		</div>
  