
  		<div class="col-md-10 content">
  			  <div class="panel ">
	<div class="panel-heading text-center">
		<h3>View All News</h3>
	</div>
	<div class="panel-body">
		
		
		<?php if($products){  ?>
	
		
		<table class="table table-bordered"> 
		
		<thead> 
		
			<th>Subtitle</th>
			<th>Title</th>
			<th>Picture</th>

			<th>Delete</th>
			
			
		</thead>
		<tr>
			<?php  foreach($products as $row){ ?>
			<td><?=$row['news_subtitle']?></td>
			<td><?=$row['news_title']?></td>
			<td><img style="width:100px;height:50;" src="<?=base_url()?>img/<?=$row['file_path']?>"  /></td>
			<td><a href="<?=base_url()?>Admin/delete_news/<?=$row['id']?>" > <button class="btn btn-danger">Delete</button></a></td>
			
			
		</tr>
		<?php }  } ?>
		</table>
		
		<?=$this->pagination->create_links();?>
	</div>
</div>
  		</div>
  