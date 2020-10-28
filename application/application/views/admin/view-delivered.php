
  		<div class="col-md-10 content">
  			  <div class="panel ">
	<div class="panel-heading text-center">
		<h3>View delivered order</h3>
	</div>
	<div class="panel-body">
		
		
		<?php if($products){  ?>
	
		
		<table class="table table-bordered"> 
		
		<thead> 
		
			<th>Date</th>
			<th>Amount</th>
			<th>Type</th>
			<th>User</th>
			<th>Mobile</th>
			<th>address</th>
			<th>Action</th>
			<th>View</th>
			
			
		</thead>
		<tr>
			<?php  foreach($products as $row){ ?>
			<td><?=$row['date']?></td>
			<td><?=$row['amount']?></td>
			<td><?=$row['payment']?></td>
			<td><?=$row['name']?></td>
			<td><?=$row['mobile']?></td>
			<td><?=$row['address']?></td>
			<td><a href="<?=base_url()?>Admin/set_undelievred/<?=$row['o_id']?>" > <button class="btn btn-warning">UnDelivered</button></a></td>
			<td><a href="<?=base_url()?>old-cart/view/<?=$row['o_id']?>" > <button class="btn btn-Success">View</button></a></td>
			
			
		</tr>
		<?php }  }else{ echo '<div class="alert alert-success">No Data </div>';} ?>
		</table>
		
		<?=$this->pagination->create_links();?>
	</div>
</div>
  		</div>
  