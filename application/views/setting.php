


	<!-- Content page -->
	<section class="bg0 p-t-104 p-b-116">
		<div class="container">
			<div class="flex-w flex-tr">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<form  method="post"   >
						<h4 class="mtext-105 cl2 txt-center p-b-30">
							Setting
						</h4>
						
						
						<?php  
					
					
						if($this->session->flashdata('message')){
						
						echo $this->session->flashdata('message');
						}
					
						?>
						
						<div class="error"><?=form_error('name')?></div>
						<div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="name" value="<?php if(set_value('name')){ echo set_value('name'); }else{ echo $user[0]['name']; }?>" placeholder="Your Name">
							<i class="lnr lnr-user how-pos4 pointer-none "></i>
							
						</div>
						
						
						<div class="error"><?=form_error('email')?></div>
						<div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="email" value="<?php if(set_value('email')){ echo set_value('email'); }else{ echo $user[0]['email']; }?>"  placeholder="Your Email">
							<i class="lnr lnr-envelope how-pos4 pointer-none "></i>
							
						</div>
						
						
						<div class="error"><?=form_error('password')?></div>
						<div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="password" name="password" value="<?php if(set_value('password')){ echo set_value('password'); }else{ echo $user[0]['password']; }?>"  placeholder="Password">
							<i class="lnr  lnr-power-switch how-pos4 pointer-none "></i>
						
						</div>
						
							
						
						<div class="error"><?=form_error('mobile')?></div>
						<div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="mobile" value="<?php if(set_value('mobile')){ echo set_value('mobile'); }else{ echo $user[0]['mobile']; }?>"  placeholder="Mobile">
							<i class="lnr  lnr-smartphone how-pos4 pointer-none "></i>
							
						</div>
						
						<div class="error"><?=form_error('address')?></div>
						<div class="bor8 m-b-30 ">
							<textarea class="stext-111 cl2 plh3 size-120 p-lr-28 p-tb-25" name="address"  placeholder="Your Address"><?php if(set_value('address')){ echo set_value('address'); }else{ echo $user[0]['address']; }?></textarea>
						
						</div>
						

						<button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
							Update Now
						</button>
					</form>
				</div>

			
				
			</div>
		</div>
	</section>	