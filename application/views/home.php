<section class="slider">
	<h1 class="hidden">Slider For Tribhuwan University Centre for International Relation </h1>
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    
<?php foreach($slider_setup as $key=>$data): ?>
    <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $key; ?>" class="<?php if($key==0) echo 'active' ?>"></li>
    <?php endforeach; ?>
    <!-- <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> -->
  </ol> 
   <div class="carousel-inner">
<?php foreach($slider_setup as $key=>$data): ?>
 
    <div class="carousel-item <?php if($key==0) echo 'active' ?>">
      <img class="d-block w-100" style="max-height:500px;" src="<?php echo base_url('site_assets/');?>uploads/slider/<?php echo $data['slider_image_name'] ?>" >
      <div class="carousel-caption d-none d-md-block text-left">
    <h5><?php echo $data['slider_title'] ?></h5>
    <p><?php echo $data['slider_subtitle'] ?></p>
  </div>
    </div>
    
<?php endforeach; ?>







<!--     <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url('site_assets/');?>images/slider1.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url('site_assets/');?>images/slider1.jpg" alt="Third slide">
    </div> -->
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	
</section>
<section class="body section_gap">
	<h1 class="hidden">Introduction & Message from Director Portion</h1>
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
					<article class="introduction">
						<h3>Introduction</h3>
							<div class="row">
							<figure class="col-lg-6 image-wrap col-sm-12 text-center">
								<img class="img-fluid mx-auto " src="<?php echo base_url('site_assets/');?>images/intro.jpg">
							</figure>
							<div class="col-lg-6 text-wrap col-sm-12 text-center">
									<p class="text-justify ">
										Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also.It has survived not only five centuries, but alsoIt.<br>
										<a href="#" class="read_more_link">Read More</a>
									</p>
							</div>
							</div>
					</article>
					<aside class="row">
						<h1 class="hidden">Latest News and Events</h1>
						<article class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<h4 class="bg_btn">Latest News</h4>
							<div class="news_box_wrap">
						<?php foreach($get_news_list as $key=>$data): ?>		
							
							<div class="col-lg-12 news_block_wrap">
							<div class="row">
								
								<div class="col-4 pad_fix " >
								<?php 	if($data['post_image_name']=='no_image'){?>
									<img class="img_tn_news" src="<?php echo base_url('site_assets/uploads/blog/thumbnail/default_image.jpg');?>">
								<?php  }else{ ?>
									<img class="img_tn_news" src="<?php echo base_url('site_assets/uploads/blog/thumbnail/');?><?php echo $data['post_image_name']  ?>">
								<?php }?>
								</div>
									
								<div class="col pad_fix"> <a href="<?php echo base_url('post/news/'.$data['slug']) ?>" class="news_title"><h6 class="text-justify text-bold text_ne "><?php echo character_limiter($data['post_title'],65); ?> </h6></a>
									<span class="date_news"><?php echo $data['post_date'] ?></span>
								</div>								
							</div>
							<hr>
							</div>
						
						<?php endforeach; ?>
							
							<div class="row">
								<div class="col-lg-12 text-center ">
									<a href="#" class="btn btn_tu_blue">Read More</a>
								</div>
							</div>


							</div>
						</article>
						<article class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<h4 class="bg_btn">Latest Event</h4>
							<div class="event_box_wrap">
								<div class="col-lg-12 news_block_wrap">
						<?php foreach($get_events_list as $key=>$data): ?>		
								<div class="row">
								<div class="col-3 pad_fix " >
									<div class="date_box">
										<div class="date_part">
											<span><?php $dates=explode(' ', $data['post_date']); echo $dates[1];?></span>
										</div>
										<div class="month_part">
											<span><?php $dates=explode(' ', $data['post_date']); echo $dates[0];?></span>
										</div>
									</div>
								</div>
								<div class="col pad_fix"> <a href="#" class="news_title"><h6 class="text-justify text-bold text_ne "><?php echo $data['post_title'] ?> </h6></a>
									<h6 class="date_event"><?php echo $data['post_date'] ?></h6>
									<h6 class="location_event"><?php echo $data['event_location'] ?></h6>
								</div>								
							</div>
							<hr>
						<?php endforeach;?>
								
						<div class="row">
								<div class="col-lg-12 text-center ">
									<a href="#" class="btn btn_tu_blue">Read More</a>
								</div>
							</div>
					</div>
						</article>

					</aside>
				</div>
			<aside class="col-lg-4 text-center">
					<div class="wrap-director">
					<h3 class="text-center">Message From Director</h3>
					<figure>
						<img src="<?php echo base_url('site_assets/');?>images/director.jpg" class="rounded mx-auto d-block director_image" alt="Image Of Director">
						<figcaption class="text-center">Nar Bahadur Gharti Magar<br>Managing Director</figcaption>						
				</figure>
					<p class="text-justify">
						It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. 
					</p>
					<a href="#" class="btn btn_tu_blue">Read More</a>
				</div>
				<div class="wrap-gallery">
				<h3 class="text-left bg_btn">Photo Gallery</h3>
				<figure class="img-gallery-box">
					<img class="img-fluid img-gallery" src="<?php echo base_url('site_assets/');?>images/gallery.jpg" alt="Image Name">
					 <div class="middle">
    					<div class="text"><a href="#" class="btn btn_tu_blue">View More</a></div>
  					</div>
				</figure>
				</div>
			</aside>


		</div>
	</div>
</section>