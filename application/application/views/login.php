


	<!-- Content page -->
	<section class="bg0 p-t-104 p-b-116">
		<div class="container">
			<div class="flex-w flex-tr">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<form  method="post"   >
						<h4 class="mtext-105 cl2 txt-center p-b-30">
							Log In
						</h4>
						
						<?php  
					
					
						if($this->session->flashdata('message')){
						
						echo $this->session->flashdata('message');
						}
						
						?>

						
						<div class="error"><?=form_error('email')?></div>
						<div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="email" value="<?=set_value('email')?>"  placeholder="Your Email">
							<i class="lnr lnr-envelope how-pos4 pointer-none "></i>
							
						</div>
						
						
						<div class="error"><?=form_error('password')?></div>
						<div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="password" name="password" value="<?=set_value('password')?>"  placeholder="Password">
							<i class="lnr  lnr-power-switch how-pos4 pointer-none "></i>
						
						</div>

						<button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
							Login Now
						</button>
					</form>
				</div>

			
				
			</div>
		</div>
	</section>	