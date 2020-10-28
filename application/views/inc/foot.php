<!--===============================================================================================-->	
	<script src="<?=site_url('asset/')?>vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=site_url('asset/')?>vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=site_url('asset/')?>vendor/bootstrap/js/popper.js"></script>
	<script src="<?=site_url('asset/')?>vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=site_url('asset/')?>vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="<?=site_url('asset/')?>vendor/daterangepicker/moment.min.js"></script>
	<script src="<?=site_url('asset/')?>vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?=site_url('asset/')?>vendor/slick/slick.min.js"></script>
	<script src="<?=site_url('asset/')?>js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script src="<?=site_url('asset/')?>vendor/parallax100/parallax100.js"></script>
	<script>
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script src="<?=site_url('asset/')?>vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
	<script>
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
		        delegate: 'a', // the selector for gallery item
		        type: 'image',
		        gallery: {
		        	enabled:true
		        },
		        mainClass: 'mfp-fade'
		    });
		});
	</script>
<!--===============================================================================================-->
	<script src="<?=site_url('asset/')?>vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=site_url('asset/')?>vendor/sweetalert/sweetalert.min.js"></script>
	<script>
		$('.js-addwish-b2').on('click', function(e){
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function(){
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		/*-------------------sweet alert--------------------------*/

		$('.js-addcart-detail').each(function(){
			
			
			 
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			
		
			
			$(this).on('click', function(){
				
		
				 var p_id = $(this).attr('hold');
				 
				 var  find_id= '#add-cart-'+p_id;
				 
				 var p_quantity = $(find_id).val();
				 
				 // alert(p_quantity);
				 
				 if(p_quantity>0){
					 
					swal(nameProduct, "is added to cart !", "success"); 
					
					var link = $(this).attr('href');
					var link = link+'/'+p_quantity;
				
					$.get(link, function( data ) {
					});
					
					
					setTimeout(function(){
					   window.location.reload(1);
					}, 2000);
										
					
				 }else{
					 
					 swal(nameProduct, "is not added to cart !", "error");
					 
					
					
				 }
				 
				
				
				
				 
			
			
				 
				
			});
		});
	
	</script>
<!--===============================================================================================-->
	<script src="<?=site_url('asset/')?>vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
<!--===============================================================================================-->
	<script src="<?=site_url('asset/')?>js/main.js"></script>
	
</body>
</html>