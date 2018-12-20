<section class="contact">
	<h1 class="hidden" style="display:none;">Contact Us</h1>
	<div class="container ">
		<div class="section_gap">
		<div class="row ">
			<div class="col">
				<article class="contact_details">
					<h3>Contact Us</h3>
					<ul class="contact_list">
						<?php foreach($contact_setup as $csdata): ?>
							<li><h5><?php echo $csdata['address'] ?></h5></li>
							<li><h5>Phone No.:&nbsp;<?php echo $csdata['phone'] ?></h5></li>
							<li><h5>Email:&nbsp;<?php echo $csdata['email'] ?></h5></li>
						<?php endforeach; ?>
						<!-- <li><h5>Kirtipur, Kathmandu, Nepal</h5></li>
						<li><h5>Phone No.: 9874563210, 9863254170</h5></li>
						<li><h5>Email:info@tucir.edu.np</h5></li> -->
					</ul>					
				</article>
				<figure class="map-box">
					<h3>Our Location</h3>
					
					<div class="col-lg-12 pad_fix" style="overflow: hidden;">
					<?php foreach($contact_setup as $csdata): ?>
					<?php echo $csdata['map_plugin'] ?>
					<?php endforeach;?>
				
			</div>
				</figure>
			</div>
			<div class="col">
				
				<aside class="query_wrap">
					<h3 class="bg_btn mar_top_fix">Have any query?</h3>
					<div class="query_body">
						<div class="row">
							<div class="col-lg-12">
							<?php echo form_open('site/add_inquiry'); ?>
							<ul class="query_box">
							<li>
								<input class="form-control" placeholder="Name" type="text" name="name" required="required">
							</li>
							<li>
								<input class="form-control" placeholder="Email Address" type="text" name="email" required="required">
							</li>
							<li>
								<input class="form-control" placeholder="Subject" type="text" name="subject">
							</li>
							<li>
								<textarea  class="form-control"  type="text" name="message" required="required">Message</textarea>
							</li>
							<li class="text-success">
							<?php echo	$this->session->flashdata('success_contact'); ?>
							</li>
							<li class="text-right">
								<button class="btn btn_tu_blue" type="submit">Send</button>
							</li>
						</ul>
							<?php form_close(); ?>
					</div>
						</div>
					</div>
				</aside>
			</div>	
		</div>
	</div>
	</div>
</section>