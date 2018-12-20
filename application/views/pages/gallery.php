<link rel="stylesheet" href="<?php echo base_url('site_assets/') ?>color_box/css/colorbox.css" />

<section class="contact">
	<h1 class="hidden" style="display:none;">Gallery</h1>
	<div class="container ">
		<div class="section_gap">
		<div class="row ">
			<div class="col">
				<article class="gallery_details">
					<h3>Gallery</h3>
								
				</article>
			</div>
				
		</div>
		<div class="row">
			<?php foreach ($gallery_setup as $key=>$data): ?>

			<div class="col-2">
				<a  class="group1" href="<?php echo base_url('site_assets/uploads/gallery/'.$data['gallery_image_name']) ?>" title="<?php echo $data['gallery_subtitle'] ?>"> <img class="img-thumbnail" src="<?php echo base_url('site_assets/uploads/gallery/thumbnail/'.$data['gallery_image_name']) ?>"></a>
			</div>
		<?php endforeach; ?>
		</div>
	</div>
	</div>
</section>