<section class="page">
<div class="container">
<div class="section_gap">
		<?php foreach($create_page as $key=>$data): ?>
		<?php  if($data['page_image_name']!='no_image') {?>
		<figure>
			<img  style="max-height: 250px;"  alt="<?php echo $data['page_image_name'] ?>" src="<?php  echo base_url('site_assets/uploads/page/'); ?><?php echo $data['page_image_name']?>">
		</figure>
		<?php }?>
	<?php endforeach; ?>
		<div class="row">
			<?php foreach($create_page as $key=>$data): ?>
		<article class="col-lg-8">
			<h3><?php echo $data['page_title'] ?></h3>
			<p class="text-justify">
				<?php echo $data['page_content'] ?>
			</p>
		</article>
		<?php endforeach; ?>
		<aside class="col-lg-4">
			<div class="row">
						<h1 class="hidden">Latest News and Events</h1>
						<article class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<h4 class="bg_btn">Latest News</h4>
							<div class="news_box_wrap">
								<div class="col-lg-12 news_block_wrap">
							<div class="row">
								<div class="col-4 pad_fix " ><img class="img_tn_news" src="<?php echo base_url('site_assets/');?>images/tn_news.JPG"></div>
								<div class="col pad_fix"> <a href="#" class="news_title"><h6 class="text-justify text-bold text_ne ">Lorem Ipsum is simply dummy text of the printing and typesetting. </h6></a>
									<span class="date_news">October 2, 2013</span>
								</div>
								
							</div>
							<hr>
							</div>
							<div class="col-lg-12 news_block_wrap">
							<div class="row">
								<div class="col-4 pad_fix " ><img class="img_tn_news" src="<?php echo base_url('site_assets/');?>images/tn_news.JPG"></div>
								<div class="col pad_fix"> <a href="#" class="news_title"><h6 class="text-justify text-bold text_ne ">Lorem Ipsum is simply dummy text of the printing and typesetting. </h6></a>
									<span class="date_news">October 2, 2013</span>
								</div>
								
							</div>
							<hr>
							</div>
								<div class="col-lg-12 news_block_wrap">
							<div class="row">
								<div class="col-4 pad_fix " ><img class="img_tn_news" src="<?php echo base_url('site_assets/');?>images/tn_news.JPG"></div>
								<div class="col pad_fix"> <a href="#" class="news_title"><h6 class="text-justify text-bold text_ne ">Lorem Ipsum is simply dummy text of the printing and typesetting. </h6></a>
									<span class="date_news">October 2, 2013</span>
								</div>
								
							</div>
							<hr>
							</div>
								<div class="col-lg-12 news_block_wrap">
							<div class="row">
								<div class="col-4 pad_fix " ><img class="img_tn_news" src="<?php echo base_url('site_assets/');?>images/tn_news.JPG"></div>
								<div class="col pad_fix"> <a href="#" class="news_title"><h6 class="text-justify text-bold text_ne ">Lorem Ipsum is simply dummy text of the printing and typesetting. </h6></a>
									<span class="date_news">October 2, 2013</span>
								</div>
								
							</div>
							<hr>
							</div>
							<div class="row">
								<div class="col-lg-12 text-center ">
									<a href="#" class="btn btn_tu_blue">Read More</a>
								</div>
							</div>


							</div>
						</article>
						

					</div>
			
		</aside>
	</div>
</div>
</div>
</section>





