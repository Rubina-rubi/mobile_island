
	<!-- Product Detail -->
	<section class="sec-product-detail bg0 p-t-65 p-b-60">
			<div class="container">
			<div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
				<button onclick="hide<?=$product_detail[0]['p_id']?>()" class="how-pos3 hov3 trans-04 js-hide-modal1">
					<img src="<?=base_url()?>images/icons/icon-close.png" alt="CLOSE">
				</button>

				<div class="row">
					<div class="col-md-6 col-lg-7 p-b-30">
						<div class="p-l-25 p-r-30 p-lr-0-lg">
							<div class="wrap-slick3 flex-sb flex-w">
								<div class="wrap-slick3-dots"></div>
								<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

								<div class="slick3 gallery-lb">
									<div class="item-slick3" data-thumb="<?=base_url()?>img/<?=$product_detail[0]['picture']?>">
										<div class="wrap-pic-w pos-relative">
											<img src="<?=base_url()?>img/<?=$product_detail[0]['picture']?>">

											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-6 col-lg-5 p-b-30">
						<div class="p-r-50 p-t-5 p-lr-0-lg">
							<h4 class="mtext-105 cl2 js-name-detail p-b-14">
								<?=$product_detail[0]['product_name']?>
							</h4>

							<span class="mtext-106 cl2">
								<?=$product_detail[0]['product_price']?>
							</span>

							<p class="stext-102 cl3 p-t-23">
								<?=$product_detail[0]['product_description']?>
							</p>
							
							<!--  -->
							<div class="p-t-33">
								<div class="flex-w flex-r-m p-b-10">
									<div class="size-203 flex-c-m respon6">
										Quantitiy
									</div>

									
								</div>

								

								<div class="flex-w flex-r-m p-b-10">
									<div class="size-204 flex-w flex-m respon6-next">
										<div class="wrap-num-product flex-w m-r-20 m-tb-10">
											<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-minus"></i>
											</div>

											<input class="mtext-104 cl3 txt-center num-product" id="add-cart-<?=$product_detail[0]['p_id']?>" type="text" name="num-product" value="1">

											<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-plus"></i>
											</div>
										</div>

										<button href="<?=base_url()?>order/add/<?=$product_detail[0]['p_id']?>/<?=$product_detail[0]['product_price']?>" hold="<?=$product_detail[0]['p_id']?>" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
											<a  >Add to cart</a>
										</button>
									</div>
								</div>	
							</div>
							
							
							
							
							
							

							<!-- rating -->
							
							
							<div class="flex-w flex-m p-l-100 p-t-40 respon7">
								<div class="text-center"> 
							
								<form action="" method="POST">
							  <?php if($this->session->userdata('uid')) {   ?>
								
									
									<?php for($i=5;$i>=1;$i--){ ?>
									<button type="submit" <?php if($rating&&$i<=$rating[0]['rating']){ echo 'class="active-this"';}  ?> name="rating" value="<?=$i?>">&#9733;</button>
									<?php } ?>
								
									
							  <?php }else{  ?>
									
									<?php for($i=5;$i>=1;$i--){ ?>
									<button type="button" <?php if($rating&&$i<=$rating[0]['rating']){ echo 'class="active-this"';}  ?> name="rating" onclick="alert('Please')" value="<?=$i?>">&#9733;</button>
									<?php } ?>
							 
							  <?php }  ?>
							  </form>
							  
							</div>
							
							</div>
							
							<!-- rating -->
							<div class="flex-w flex-m p-l-100 p-t-40 respon7">
								<div class="flex-m bor9 p-r-10 m-r-11">
									<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100" data-tooltip="Add to Wishlist">
										<i class="zmdi zmdi-favorite"></i>
									</a>
								</div>

								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Facebook">
									<i class="fa fa-facebook"></i>
								</a>

								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Twitter">
									<i class="fa fa-twitter"></i>
								</a>

								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Google Plus">
									<i class="fa fa-google-plus"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


	</section>
	
	
	
	 <style type="text/css"> 
		  
			button {
			  border: 0;
			  background: transparent;
			  font-size: 1.5em;
			  margin: 0;
			  padding: 0;
			  float: right;
			  color:gray;
			}
			
			button:hover,
			button:hover + button,
			button:hover + button + button,
			button:hover + button + button + button,
			button:hover + button + button + button + button {
			  color: red;
			}
			
			.active-this{
				
				 color: red;
			}
			
			
		  </style>


