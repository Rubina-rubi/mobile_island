
<div class="col-md-10 content">
	<div class="panel ">
	
		<div class="panel-body">

		
			<div class="col-md-6 col-md-offset-1">
			
			<h3>Add Product</h3>

			<?php echo $this->session->flashdata('success');  ?>			

			<form action="<?php echo base_url();?>Admin/add_product"  method="post"  enctype="multipart/form-data" >
				
				
				<div class="form-group"> 
			
				<input type="text" class="form-control input-lg" placeholder="Product Name" name="product_name" value="<?=set_value('product_name')?>" />
				
				<div class="error"><?=form_error('product_name')?></div>
				
				</div>
				
				<div class="form-group"> 
			
				<input type="text" class="form-control input-lg" placeholder="Tag" name="tag" value="<?=set_value('tag')?>" />
				
				<div class="error"><?=form_error('tag')?></div>
				
				</div>
				
				
				<div class="form-group"> 
			
				<input type="text" class="form-control input-lg" placeholder="Product Price" name="product_price" value="<?=set_value('product_price')?>" />
				
				<div class="error"><?=form_error('product_price')?></div>
				
				</div>
				
				
				<div class="form-group"> 
			
				<textarea name="product_description" placeholder="Product Description" class="form-control input-lg" ><?=set_value('product_description')?></textarea>
				<div class="error"><?=form_error('product_description')?></div>
				
				</div>
				
				<div class="form-group"> 
			
						<div class="input-group">
							<span class="input-group-btn">
								<span class="btn btn-primary btn-file">
									Browse… <input type="file" id="imgInp"   name="picture" >
								</span>
							</span>
							<input type="text" class="form-control" >
						</div>
						<br />
						
						<div class="show-image"> 
							
							<img id='img-upload' style="width:50px;height:50px;"/>
						
						</div>
						
				
				</div>
				
				<div class="form-group"> 
			
		
						<input type="submit" class="btn btn-primary" value="Add Product" />
				</div>
				
			
			
			
			</form>

			</div>

		</div>
	</div>
</div>


<script type="text/javascript"> 
$(document).ready( function() {
    	$(document).on('change', '.btn-file :file', function() {
		var input = $(this),
			label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		input.trigger('fileselect', [label]);
		});

		$('.btn-file :file').on('fileselect', function(event, label) {
		    
		    var input = $(this).parents('.input-group').find(':text'),
		        log = label;
		    
		    if( input.length ) {
		        input.val(log);
		    } else {
		        if( log ) alert(log);
		    }
	    
		});
		function readURL(input) {
		    if (input.files && input.files[0]) {
		        var reader = new FileReader();
		        
		        reader.onload = function (e) {
		            $('#img-upload').attr('src', e.target.result);
		        }
		        
		        reader.readAsDataURL(input.files[0]);
		    }
		}

		$("#imgInp").change(function(){
		    readURL(this);
		}); 	
	});

</script>

<style type="text/css"> 

.btn-file {
    position: relative;
    overflow: hidden;
}
.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}

#img-upload{
    width: 100%;
}
</style>
  