
	<!-- Footer -->
	<footer id="footer" class="sm-padding bg-dark">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<div class="col-md-12">

					<!-- footer logo -->
					<div class="footer-logo">
						<a href="<?php echo base_url('site_assets/'); ?>index.html"><img src="<?php echo base_url('site_assets/'); ?>img/logo-alt.png" alt="logo"></a>
					</div>
					<!-- /footer logo -->

					<!-- footer follow -->
					<ul class="footer-follow">
						<?php foreach($social_setup as $key=>$data): ?>
						<li><a href="http://www.facebook.com/<?php echo $data['facebook'] ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
						<li><a href="http://www.twitter.com/<?php echo $data['twitter'] ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
						<li><a href="http://www.youtube.com/<?php echo $data['youtube'] ?>" target="_blank"><i class="fa fa-youtube"></i></a></li>
						<?php endforeach;?>
					</ul>
					<!-- /footer follow -->

					<!-- footer copyright -->
					<div class="footer-copyright">
						<p>Copyright © 2017. All Rights Reserved. Designed by <a href="http://www.yupnep.com" target="_blank">YupNep</a></p>
					</div>
					<!-- /footer copyright -->

				</div>

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</footer>
	<!-- /Footer -->

	<!-- Back to top -->
	<div id="back-to-top"></div>
	<!-- /Back to top -->

	<!-- Preloader -->
	<div id="preloader">
		<div class="preloader">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<!-- /Preloader -->

	<!-- jQuery Plugins -->
	<script type="text/javascript" src="<?php echo base_url('site_assets/'); ?>js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url('site_assets/'); ?>js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url('site_assets/'); ?>js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url('site_assets/'); ?>js/jquery.magnific-popup.js"></script>
	<script type="text/javascript" src="<?php echo base_url('site_assets/'); ?>js/main.js"></script>

</body>

</html>
