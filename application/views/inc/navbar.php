	
<!-- Header -->
<header <?php if($this->uri->segment(1)!='home'){ echo 'class="header-v4"'; } ?>  >
	<!-- Header desktop -->
	<div class="container-menu-desktop">
		<!-- Topbar -->
		<div class="top-bar">
			<div class="content-topbar flex-sb-m h-full container">
				<div class="left-top-bar">
					Free shipping for standard order over tk500
				</div>

				<div class="right-top-bar flex-w h-full">
					<?php  if(!$this->session->userdata('uid')) { ?>
						<a href="<?=site_url('signup')?>" class="flex-c-m trans-04 p-lr-25">
							Sign Up
						</a>
						
						<a href="<?=site_url('login')?>" class="flex-c-m trans-04 p-lr-25">
							Log In
						</a>
						
					<?php   }else if($this->session->userdata('uid')){ ?>

						<a href="<?=site_url('Logout')?>" class="flex-c-m trans-04 p-lr-25">
							Logout
						</a>

					<?php   } ?>

				</div>
			</div>
		</div>

		<div class="wrap-menu-desktop">
			<nav class="limiter-menu-desktop container">

				<!-- Logo desktop -->		
				<a href="<?=site_url()?>" class="logo">
					<img src="<?=base_url()?>images/icons/logo-01.png" alt="IMG-LOGO"> 
				</a>

				<!-- Menu desktop -->
				<div class="menu-desktop">
					<ul class="main-menu">
						<li class="">
							<a href="<?=site_url()?>">Home</a>

						</li>

						<li>
							<a href="<?=base_url()?>product">Shop</a>
						</li>

						
						<li>
							<a href="<?=base_url()?>about">About</a>
						</li>

						<li>
							<a href="<?=base_url()?>contact">Contact</a>
						</li>
						<?php  if(!$this->session->userdata('uid')) { ?>

							<li>
								<a href="<?=base_url()?>Signup">Signup</a>
							</li>
							
							<li>
								<a href="<?=base_url()?>Login">Login</a>
							</li>
						<?php   }else if($this->session->userdata('uid')){ ?>

							<li>
								<a href="<?=base_url()?>Logout">Logout</a>
							</li>



							
						<?php   } ?>
						
					</ul>
				</div>	

				<!-- Icon header -->
				<div class="wrap-icon-header flex-w flex-r-m">
					<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
						<i class="zmdi zmdi-search"></i>
					</div>

					<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="<?=$total_list?>">
						<i class="zmdi zmdi-shopping-cart"></i>
					</div>







					<?php  if($this->session->userdata('uid')&&$this->session->userdata('utype')=='user') { ?>
						
						<a href="<?=base_url()?>basket"><div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11" >
							<i class="zmdi zmdi-shopping-basket"></i>
						</div></a>
						
						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11"   >
							<i class="zmdi zmdi-menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ></i>
							
							<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								<a class="dropdown-item" href="<?=base_url()?>basket" >MY Recent</a>
								<a class="dropdown-item" href="<?=base_url()?>cart" >MY Cart</a>
								<a class="dropdown-item" href="<?=base_url()?>order-list" >MY Orders</a>
								<a class="dropdown-item" href="<?=base_url()?>order-list-card" >Card Transection</a>
								<a class="dropdown-item" href="<?=base_url()?>order-list/cancelled" >Cancelled Orders</a>
								<a class="dropdown-item" href="<?=base_url()?>order-list/deliverred" >Delivered Orders</a>
								<a class="dropdown-item" href="<?=base_url()?>setting" >Setting</a>
								<a class="dropdown-item" href="<?=base_url()?>Logout" >Logout</a>
							</div>
						</div>
						
						
					<?php  }else if($this->session->userdata('uid')&&$this->session->userdata('utype')=='admin') { ?>
						
						<a href="<?=base_url()?>admin"><div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11" >
							<i class="zmdi zmdi-home"></i>
						</div></a>
						

					<?php } ?>


				</div>
			</nav>
		</div>	
	</div>

	<!-- Header Mobile -->
	<div class="wrap-header-mobile">
		<!-- Logo moblie -->		
		<div class="logo-mobile">
			<a href="index.html"><img src="images/icons/logo-01.png" alt="IMG-LOGO"></a>
		</div>

		<!-- Icon header -->
		<div class="wrap-icon-header flex-w flex-r-m m-r-15">
			<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
				<i class="zmdi zmdi-search"></i>
			</div>

			<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="<?=$total_list?>">
				<i class="zmdi zmdi-shopping-cart"></i>
			</div>

			<a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="0">
				<i class="zmdi zmdi-favorite-outline"></i>
			</a>
		</div>

		<!-- Button show menu -->
		<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
			<span class="hamburger-box">
				<span class="hamburger-inner"></span>
			</span>
		</div>
	</div>


	<!-- Menu Mobile -->
	<div class="menu-mobile">
		<ul class="topbar-mobile">
			<li>
				<div class="left-top-bar">
					Free shipping for all orders!
				</div>
			</li>

			<li>
				<div class="right-top-bar flex-w h-full">

					<a href="<?=site_url('signup')?>" class="flex-c-m p-lr-10 trans-04">
						Sign Up
					</a>

					<a href="<?=site_url('login')?>" class="flex-c-m p-lr-10 trans-04">
						Log In
					</a>

					
				</div>
			</li>
		</ul>

		<ul class="main-menu-m navbar-fixed-top">
			<li>
				<a href="<?=site_url()?>">Home</a>
				<span class="arrow-main-menu-m">
					<i class="fa fa-angle-right" aria-hidden="true"></i>
				</span>
			</li>

			<li>
				<a href="<?=base_url()?>product">Shop</a>
			</li>

			<li>
				<a href="shoping-cart.html" class="label1 rs1" data-label1="hot">Features</a>
			</li>

			<li>
				<a href="<?=base_url()?>about">About</a>
			</li>

			<li>
				<a href="<?=base_url()?>contact">Contact</a>
			</li>

			<li>
				<a href="<?=base_url()?>Signup">Signup</a>
			</li>

			<li>
				<a href="<?=base_url()?>Login">Login</a>
			</li>



		</ul>
	</div>

	<!-- Modal Search -->
	<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
		<div class="container-search-header">
			<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
				<img src="images/icons/icon-close2.png" alt="CLOSE">
			</button>

			<form class="wrap-search-header flex-w p-l-15" action="<?=base_url()?>product/index" method="post" >
				<button class="flex-c-m trans-04">
					<i class="zmdi zmdi-search"></i>
				</button>
				<input class="plh3" type="text" name="product_name" placeholder="Search...">
			</form>


		</div>
	</div>
</header>




<!-- Cart -->
<div class="wrap-header-cart js-panel-cart">
	<div class="s-full js-hide-cart"></div>

	<div class="header-cart flex-col-l p-l-65 p-r-25">
		<div class="header-cart-title flex-w flex-sb-m p-b-8">
			<span class="mtext-103 cl2">
				Your Cart
			</span>

			<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
				<i class="zmdi zmdi-close"></i>
			</div>
		</div>

		<div class="header-cart-content flex-w js-pscroll">
			<ul class="header-cart-wrapitem w-full">
				
				
				<?php $total=0; if($order){    

					foreach($order as $row){ ?>
						<li class="header-cart-item flex-w flex-t m-b-12">
							<div class="header-cart-item-img">
								<img src="<?=base_url()?>img/<?=$row['picture']?>" alt="<?=$row['product_name']?>">
							</div>

							<div class="header-cart-item-txt p-t-8">
								<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
									<?=$row['product_name']?>
								</a>

								<span class="header-cart-item-info">
									<?=$row['quantity']?> x TK <?=$row['price']?>
								</span>
							</div>
						</li>

						<?php 

						$total=$total+$row['amount']; 				

					} }else{ 

						?>
						<li class="header-cart-item flex-w flex-t m-b-12">


							<div class="header-cart-item-txt p-t-8">
								<p>Sorry No Item on Cart!!</p>
							</div>
						</li>

					<?php  } ?>
					
				</ul>
				
				<div class="w-full">
					<div class="header-cart-total w-full p-tb-40">
						Total: TK <?=$total?>
					</div>

					<div class="header-cart-buttons flex-w w-full">
						<a href="<?=base_url()?>cart" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
							View Cart
						</a>
						

						<a href="" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
							Check Out
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

