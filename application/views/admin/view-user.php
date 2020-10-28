
  		<div class="col-md-10 content">
  			  <div class="panel ">
	<div class="panel-heading text-center">
		<h3>View All User</h3>
	</div>
	<div class="panel-body">
		
		
		<?php if($users){  ?>
	
		
		<table class="table table-bordered"> 
		
		<thead> 
		
			<th>Name</th>
			<th>Email</th>
			<th>Mobile Address</th>
			<th>Delete</th>
			
			
		</thead>
		<tr>
			<?php  foreach($users as $row){ ?>
			<td><?=$row['name']?></td>
			<td><?=$row['email']?></td>
			<td><?=$row['mobile']?></td>
			<td><a href="<?=base_url()?>Admin/delete_user/<?=$row['id']?>" > <button class="btn btn-danger" >Delete</button></a></td>
			
			
			
		</tr>
		<?php }  } ?>
		</table>
		
		<?=$this->pagination->create_links();?>
	</div>
</div>
  		</div>
  