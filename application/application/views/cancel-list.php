

	<!-- breadcrumb -->
	<div class="container">
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
			<a href="index.html" class="stext-109 cl8 hov-cl1 trans-04">
				Home
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<span class="stext-109 cl4">
				Shoping Cart
			</span>
		</div>
	</div>
	
	<div class="container">
	<div class="col-md-8"> 
	
	<?php if($this->session->userdata('message')) {
		
		echo $this->session->userdata('message');
	}?>
	</div>
	</div>
		

	<!-- Shoping Cart -->
	<form class="bg0 p-t-75 p-b-85">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
					<div class="m-l-25 m-r--38 m-lr-0-xl">
						<div class="wrap-table-shopping-cart">
							<table class="table-shopping-cart text-center">
							<?php if($order_data_list){  $total=0;  ?>
								<tr class="table_head">
									<th class="column-2 text-center">Date</th>
						
									<th class="column-3 text-center">Amount</th>
									<th class="column-4 text-center">Status</th>
									<th class="column-4 text-center">Payment</th>
									<th class="column-4 text-center">View List</th>
									<th class="column-4 text-center">Cancel</th>
								</tr>
								
								<?php 
				
									foreach($order_data_list as $row){ ?>
									
								<tr class="table_row">
								
								
										<td class="column-2 text-center"><?=$row['date']?></td>
									<td class="column-3 text-center">TK <?=$row['amount']?></td>
									<td class="column-4 text-center">
									
											<?=$row['delivery_status']?>
										
									</td>
									
									<td class="column-4 text-center">
									
											<?=$row['payment']?>
										
									</td>
									
									<td class="column-4 text-center">
									
											<a href="<?=base_url()?>old-cart/view/<?=$row['id']?>"><button type="button" class="btn btn-secondary">View Now</button></a>
										
									</td>
									
									<td class="column-4 text-center">
									
											<a href="<?=base_url()?>order/reorder/<?=$row['id']?>"><button type="button" class="btn btn-danger">Reorder Now</button></a>
										
									</td>
									
									
								</tr>
								
									<?php 
					
									$total=$total+$row['amount']; 				
										
									} }else{ 
										$total=0;
									?>
									<tr class="table_row">
									<p>Sorry No Product Added!!!</p>
									</tr>
									
										<?php  } ?>

								
							</table>
							
							
						</div>
							<div class="custom_pagination"> 
						
							<?php  echo $this->pagination->create_links(); ?>
						
							</div>
						
					</div>
					
				</div>
				

				<div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
					<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
						<h4 class="mtext-109 cl2 p-b-30">
						 Cancelled Totals
						</h4>

						<div class="flex-w flex-t bor12 p-b-13">
							<div class="size-208">
								<span class="stext-110 cl2">
									Subtotal:
								</span>
							</div>

							<div class="size-209">
								<span class="mtext-110 cl2">
									TK <?=$total?>
								</span>
							</div>
						</div>

						<div class="flex-w flex-t bor12 p-t-15 p-b-30">
							<div class="size-208 w-full-ssm">
								<span class="stext-110 cl2">
									Shipping:
								</span>
							</div>

							<div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
								<p class="stext-111 cl6 p-t-2">
									There are no shipping methods available. Please double check your address, or contact us if you need any help.
								</p>
								
							</div>
						</div>

						<div class="flex-w flex-t p-t-27 p-b-33">
							<div class="size-208">
								<span class="mtext-101 cl2">
									Total:
								</span>
							</div>

							<div class="size-209 p-t-1">
								<span class="mtext-110 cl2">
									TK <?=$total?>
								</span>
							</div>
						</div>
						
					

						
					</div>
				</div>
			</div>
		</div>
	</form>
		

		
<style type="text/css"> 
.custom_pagination{
margin-top:30px;
}
.custom_pagination ul li a{
background:#e50c49;	
padding:10px 15px;
margin:0px 2px;
color:white;
font-weight:bold;
}

.active > a  {
background:black!important;	
color: white!important;	
}

</style>
	