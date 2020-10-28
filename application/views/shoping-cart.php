

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
							<table class="table-shopping-cart">
								<tr class="table_head">
									<th class="column-1">Product</th>
									<th class="column-2"></th>
									<th class="column-3">Price</th>
									<th class="column-4">Quantity</th>
									<th class="column-5">Total</th>
								</tr>

								
								
								<?php if($order){  $total=0;  
				
									foreach($order as $row){ ?>
									
								<tr class="table_row">
								
									<td class="column-1">
										<a href="<?=base_url()?>order/remove/<?=$row['i_id']?>"><div class="how-itemcart1">
											<img src="<?=base_url()?>img/<?=$row['picture']?>" alt="IMG">
										</div></a>
									</td>
										<td class="column-2"><?=$row['product_name']?></td>
									<td class="column-3">TK <?=$row['product_price']?></td>
									<td class="column-4 text-center">
									
											<?=$row['quantity']?>
										
									</td>
									<td class="column-5"> TK <?=$row['product_price']?></td>
									
									
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
						
					</div>
				</div>

				<div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
					<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
						<h4 class="mtext-109 cl2 p-b-30">
							Cart Totals
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
						
						<?php  if($this->session->userdata('utype')=='user'&&$this->session->userdata('temp_order_id')) { ?>
						<a href="<?=base_url()?>Order/confirm/<?=$this->session->userdata('temp_order_id')?>/<?=$total?>"><button type="button"   class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 ">
							Proceed to Order
						</button></a>
						<br />
						<a href="<?=base_url()?>payment/card/<?=$this->session->userdata('temp_order_id')?>/<?=$total?>"><button type="button"   class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 ">
							Payment and Order
						</button></a>
						
						<?php  }else if($this->session->userdata('utype')=='user'&&!$this->session->userdata('temp_order_id')) { ?>
						<button type="button" data-toggle="modal" data-target="#exampleModalCenter2"  class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 ">
							Proceed to Checkout
						</button>
						
						<?php  }else { ?>
						<button type="button" data-toggle="modal" data-target="#exampleModalCenter"  class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 ">
							Proceed to Checkout
						</button>
						
						<?php  }?>

						
					</div>
				</div>
			</div>
		</div>
	</form>
		
		
<!-- Modal -->
<div class="modal fade" style="margin-top:100px;" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      Please Login 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="<?=base_url()?>login"><button type="button" class="btn btn-danger">Login</button></a>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" style="margin-top:100px;" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Please Buy Some Product
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="<?=base_url()?>product"><button type="button" class="btn btn-danger">BUY NOW</button></a>
      </div>
    </div>
  </div>
</div>
		

	