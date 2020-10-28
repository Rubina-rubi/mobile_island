<!--===============================================================================================-->	
	<script src="<?=site_url('asset/')?>vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=site_url('asset/')?>vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=site_url('asset/')?>vendor/bootstrap/js/popper.js"></script>
	<script src="<?=site_url('asset/')?>vendor/bootstrap/js/bootstrap.min.js"></script>


<!--===============================================================================================-->
	<script src="<?=site_url('asset/')?>js/main.js"></script>

	
	<script type="text/javascript">
	$(function () {
  	$('.navbar-toggle-sidebar').click(function () {
  		$('.navbar-nav').toggleClass('slide-in');
  		$('.side-body').toggleClass('body-slide-in');
  		$('#search').removeClass('in').addClass('collapse').slideUp(200);
  	});

  	$('#search-trigger').click(function () {
  		$('.navbar-nav').removeClass('slide-in');
  		$('.side-body').removeClass('body-slide-in');
  		$('.search-input').focus();
  	});
  });
	
	</script>
	
</body>
</html>