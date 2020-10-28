<!-- Stripe JavaScript library -->
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>

<!-- jQuery is used only for this example; it isn't required to use Stripe -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<script type="text/javascript">
//set your publishable key
Stripe.setPublishableKey('pk_test_PHMGckKQ0YSa7YVl9NJrNP8l');

//callback to handle the response from stripe
function stripeResponseHandler(status, response) {
    if (response.error) {
        //enable the submit button
        $('#payBtn').removeAttr("disabled");
        //display the errors on the form
        $(".payment-errors").html(response.error.message);
    } else {
        var form$ = $("#paymentFrm");
        //get token id
        var token = response['id'];
        //insert the token into the form
        form$.append("<input type='hidden' name='stripeToken' value='" + token + "' />");
        //submit form to the server
        form$.get(0).submit();
    }
}
$(document).ready(function() {
    //on form submit
    $("#paymentFrm").submit(function(event) {
        //disable the submit button to prevent repeated clicks
        $('#payBtn').attr("disabled", "disabled");
        
        //create single-use token to charge the user
        Stripe.createToken({
            number: $('.card-number').val(),
            cvc: $('.card-cvc').val(),
            exp_month: $('.card-expiry-month').val(),
            exp_year: $('.card-expiry-year').val()
        }, stripeResponseHandler);
        
        //submit from callback
        return false;
    });
});
</script>


	<!-- Content page -->
	<section class="bg0 p-t-104 p-b-116">
		<div class="container">
			<div class="flex-w flex-tr">
				<div class="col-md-3"></div>
				<div class="col-md-6">
				
					<h4 class="mtext-105 cl2 txt-center p-b-30">
						Payment
					</h4>
					
					<?php  
					
					
						if($this->session->flashdata('message')){
						
						echo $this->session->flashdata('message');
						}
					
						?>
						
					<span class="payment-errors"></span>

					
					<form action="<?=base_url()?>payment/card/<?=$this->uri->segment(3)?>/<?=$this->uri->segment(4)?>" method="POST" id="paymentFrm" >
					
					
					<div class="form-group">
					<input type="text" class="form-control input-lg" placeholder="your name" name="name" size="50" />
					</div>
					<div class="form-group">
					<input  type="text"  class="form-control input-lg" placeholder="your email" name="email" size="50" />
					</div>
				
					<div class="form-group">
					<input  type="text" placeholder="Card Number" name="card_num" size="20" autocomplete="off" class="card-number form-control input-lg" />
					</div>
				
					<div class="form-group">
					<input  type="text"  class="form-control input-lg" placeholder="CVC" name="cvc" size="4" autocomplete="off" class="card-cvc" />
					</div>
					<div class="form-group">
					<input  type="text"  placeholder=" expiry_month" name="exp_month" size="2" class="card-expiry-month form-control input-lg"/>
						</div>
					<div class="form-group">
					<input  type="text"    placeholder="expiry_YYYY" name="exp_year" size="4" class="card-expiry-year form-control input-lg"/>
					</div>

					<button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer" id="payBtn">
						Pay Now
					</button>
					</form>
					</div>
				

</form>

			
				
			</div>
		</div>
	</section>	