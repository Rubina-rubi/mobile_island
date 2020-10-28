

<!-- Product -->
	<section class="bg0 p-t-23 p-b-140">
		<div class="container">
			<div class="flex-w flex-sb-m p-b-52">
				<div class="flex-w flex-l-m filter-tope-group m-tb-10">
					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
						All Products
					</button>

					<?php foreach($tag as $row){   ?>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".<?=$row['tag']?>">
						<?=$row['tag']?>
					</button>
					
					<?php  } ?>

				
				</div>

				<div class="flex-w flex-c-m m-tb-10">
				

					<div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
						<i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
						<i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
						Search
					</div>
				</div>
				
				<!-- Search product -->
				<div class="dis-none panel-search w-full p-t-10 p-b-15">
				<form action="<?=base_url()?>product/index" method="post" >
				<div class="bor8 dis-flex p-l-15">
					
						
						<button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
							<i class="zmdi zmdi-search"></i>
							
						</button>

						<input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="product_name" placeholder="Search">
						
					</div>
				</form>	
				</div>

				
			</div>

			<div class="row isotope-grid">
			
			<?php  foreach($product as $row) { ?>
			
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item <?=$row['tag']?>">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="<?=base_url()?>img/<?=$row['picture']?>" alt="IMG-PRODUCT">

							<a href="#" onclick="show<?=$row['p_id']?>()" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal<?=$row['p_id']?>">
								Quick View
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="<?=base_url()?>product-detail/view/<?=$row['p_id']?>" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
										<?=$row['product_name']?>
								</a>

								<span class="stext-105 cl3">
										<?=$row['product_price']?>
								</span>
							</div>
							
							<div class="block2-txt-child1 flex-col-l">
								<div class="text-center"> 
							
							<?php $temp_rating= $rating[$row['p_id']][0]['rate'];   for($i=5;$i>=1;$i--){ ?>
							<button type="button" <?php if($rating&&$i<=$temp_rating){ echo 'class="active-this"';}  ?> name="rating"  value="<?=$i?>">&#9733;</button>
							<?php } ?>
							  
							</div>
							
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
								<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
									<img class="icon-heart1 dis-block trans-04" src="<?=base_url()?>images/icons/icon-heart-01.png" alt="ICON">
									<img class="icon-heart2 dis-block trans-04 ab-t-l" src="<?=base_url()?>images/icons/icon-heart-02.png" alt="ICON">
								</a>
							</div>
						</div>
					</div>
				</div>
				
				
				
				<!-- Modal1&&&&&&&&&&&&    MODALLLLLLLLLLLLLLLLLLLLLLLLd -->
				
			<div class="wrap-modal<?=$row['p_id']?> js-modal<?=$row['p_id']?> p-t-60 p-b-20">
		<div class="overlay-modal<?=$row['p_id']?> js-hide-modal<?=$row['p_id']?>"></div>

		<div class="container">
			<div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
				<button onclick="hide<?=$row['p_id']?>()" class="how-pos3 hov3 trans-04 js-hide-modal1">
					<img src="<?=base_url()?>images/icons/icon-close.png" alt="CLOSE">
				</button>

				<div class="row">
					<div class="col-md-6 col-lg-7 p-b-30">
						<div class="p-l-25 p-r-30 p-lr-0-lg">
							<div class="wrap-slick3 flex-sb flex-w">
								<div class="wrap-slick3-dots"></div>
								<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

								<div class="slick3 gallery-lb">
									<div class="item-slick3" data-thumb="<?=base_url()?>img/<?=$row['picture']?>">
										<div class="wrap-pic-w pos-relative">
											<img src="<?=base_url()?>img/<?=$row['picture']?>">

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
								<?=$row['product_name']?>
							</h4>

							<span class="mtext-106 cl2">
								<?=$row['product_price']?>
							</span>

							<p class="stext-102 cl3 p-t-23">
								<?=$row['product_description']?>
							</p>
							
							<!--  -->
							<div class="p-t-33">
								<div class="flex-w flex-r-m p-b-10">
									<!-- <div class="size-203 flex-c-m respon6">
										Quantitiy
									</div> -->

									
								</div>

								

								<div class="flex-w flex-r-m p-b-10">
									<div class="size-204 flex-w flex-m respon6-next">
										
											<!-- <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-minus"></i>
											</div> -->

											<input class="mtext-104 cl3 txt-center num-product" id="add-cart-<?=$row['p_id']?>" type="hidden" name="num-product" value="1">

											<!-- <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-plus"></i>
											</div> -->
										

										<button href="<?=base_url()?>order/add/<?=$row['p_id']?>/<?=$row['product_price']?>" hold="<?=$row['p_id']?>" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
											<a  >Add to cart</a>
										</button>
									</div>
								</div>	
							</div>

							<!--  -->
					<!-- 		<div class="flex-w flex-m p-l-100 p-t-40 respon7">
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
							</div> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
<style type="text/css"> 

.wrap-modal<?=$row['p_id']?> {
position: fixed;
width: 100%;
height: 100vh;
top: 0;
left: 0;
z-index: 9000;
overflow: auto;

-webkit-transition: all 0.4s;
-o-transition: all 0.4s;
-moz-transition: all 0.4s;
transition: all 0.4s;

visibility: hidden;
opacity: 0;
}			


.overlay-modal<?=$row['p_id']?> {
position: fixed;
z-index: -1;
width: 100%;
height: 100%;
top: 0;
left: 0;
background: #000;
opacity: 0.8;
}

.show-modal<?=$row['p_id']?> {
  visibility: visible;
  opacity: 1;
}


</style>	

<script type="text/javascript"> 
  
		function show<?=$row['p_id']?>(){
			
		$('.js-modal<?=$row['p_id']?>').addClass('show-modal<?=$row['p_id']?>');

		}

		function hide<?=$row['p_id']?>(){
		$('.js-modal<?=$row['p_id']?>').removeClass('show-modal<?=$row['p_id']?>');
		}


</script>


				<?php   } ?>

				


				

				
				
			</div>

			<!-- Load more -->
			<div class="flex-c-m flex-w w-full p-t-45">
				<a href="<?=base_url()?>Product/index/<?=$current+4?><?php if(isset($product_name)) { echo '/'.$product_name.''; }?>" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
					Load More
				</a>
				
			</div>
		</div>
	</section>


<style type="text/css"> 
		  
		  .reviews-count{
			margin-left:-100px;  
		  }
		  .reviews-star{
			  float:left;
			  width:100px;
			  margin-top:-25px;
		  }
			button {
			  border: 0;
			  background: transparent;
			  font-size: 1.5em;
			  margin: 0;
			  padding: 0;
			  float: right;
			  color:gray;
			}
			
	
			
			.active-this{
				
				color: #e5580b;
			}
			
			
		  </style>
	

