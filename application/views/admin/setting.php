
<div class="col-md-10 content">
	<div class="panel ">
	
		<div class="panel-body">

		
			<div class="col-md-6 col-md-offset-1">
			
			<h3>SETTING</h3>
			
			<?php echo $this->session->flashdata('success');  ?>	
			
				<form  action="" method="post"   >
			
						<div class="form-group">
							<input class="form-control input-lg" type="text" name="name" value="<?php if(set_value('name')){ echo set_value('name'); }else{ echo $user[0]['name']; }?>" placeholder="Your Name">
						
							
						</div>
						
							<div class="error"><?=form_error('name')?></div>
						
						
						
						<div class="form-group">
							<input class="form-control input-lg" type="text" name="email" value="<?php if(set_value('email')){ echo set_value('email'); }else{ echo $user[0]['email']; }?>"  placeholder="Your Email">
						
							
						</div>
						<div class="error"><?=form_error('email')?></div>
						
		
						<div class="form-group">
							<input class="form-control input-lg" type="password" name="password" value="<?php if(set_value('password')){ echo set_value('password'); }else{ echo $user[0]['password']; }?>"  placeholder="Password">
							
						
						</div>
						<div class="error"><?=form_error('password')?></div>
										
						
							
						
						
						<div class="form-group">
							<input class="form-control input-lg" type="text" name="mobile" value="<?php if(set_value('mobile')){ echo set_value('mobile'); }else{ echo $user[0]['mobile']; }?>"  placeholder="Mobile">
							<i class="lnr  lnr-smartphone how-pos4 pointer-none "></i>
							
						</div>
						<div class="error"><?=form_error('mobile')?></div>
						
						
						
				<div class="form-group"> 
			
		
						<input type="submit" class="btn btn-primary" value="Update Account" />
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
  