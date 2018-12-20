
<footer>
	<div class="container">
		<h1 class="hidden">Footer For TUCIR</h1>
		<div class="row">
			<div class="col-lg-4">
				<div class="quicknav_wrap">
					<h4 class="foot_title_under">Quick Navigation</h4>
					<ul class="quick_nav_link">
						<li><a href="">Home</a></li>
						<li><a href="">About Us</a></li>
						<li><a href="">Services</a></li>
						<li><a href="">Faculty</a></li>
						<li><a href="">Contact Us</a></li>						
					</ul>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="map_wrap">
					<h4 class="foot_title_under">Our Location</h4>
					<div class="map_box" style="max-height: 200px;">
					<?php foreach($contact_setup as $csdata): ?>
					<?php echo $csdata['map_plugin'] ?>
					<?php endforeach;?>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="contact_foot_wrap">
					<h4 class="bg_btn no_btm_margin">Contact Us</h4>
					<div class="contact_box">
					<ul class="contact_foot_link">
						<?php foreach($contact_setup as $csdata): ?>
							<li><?php echo $csdata['address'] ?></li>
							<li><?php echo $csdata['phone'] ?></li>
							<li><?php echo $csdata['email'] ?></li>
						<?php endforeach; ?>
					</ul>
					<ul class="social_links">
						<li><a href=""><i class="fab fa-facebook-f"></i></a></li>
						<li><a href=""><i class="fab fa-twitter"></i></a></li>
						<li><a href=""><i class="fab fa-youtube"></i></a></li>
					</ul>
				</div>
				</div>
			</div>
		</div>
		
	</div>	
	<div class="col-lg-12">

	<div class="row end_credit">
			
			<div class="container">
			<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
			<div class="row">
				<div class="col-lg-2 foot_logo"><img src="<?php echo base_url('site_assets/');?>images/logo.png" class="img-fluid logo_foot"></div>
				<div class="foot_text_logo col-lg-10"><h4>Tribhuwan University<br>Centre for internation relation</h4>
				</div>
			</div>
		</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<ul class="foot_link">
					
						<li><a href="">Terms&nbsp;|</a></li>
						<li><a href="">Privacy Policy</a></li>
				</ul>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<h6 class="copyright">&copy; <?php echo date('Y'); ?> &nbsp; All Rights Rersved. Powered by <a href="http://www.yupnep.com" target="_blank">YupNep</a></h6>
			</div>
		</div>
	</div>
</div>

</div>
</footer>


<script src="<?php echo base_url('site_assets/');?>js/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url('site_assets/');?>js/bootstrap.min.js"></script>
<script src="<?php echo base_url('site_assets/') ?>color_box/js/jquery.colorbox.js"></script>
<script>
		
			$(document).ready(function(){
				$(".group1").colorbox({rel:'group1'});
			});
	</script>
</body>
</html>