  <div class="content">
        <div class="container-fluid">

<div class="row">
                	
                	<div class="col-lg-12">
                	<div class="card">
                    <div class="card-header card-header-primary">
                  <h4 class="card-title ">Gallery Setup</h4>
                  <p class="card-category">The Gallery Setup is done here.</p>
                </div>
                		<div class="card-body">
                      <div class="col-lg-12 text-right"><a href="#" data-target="#addModal" data-toggle="modal" class="btn btn-success">ADD</a></div>
        					<table class="table table-hover">
        					
        						<thead class="text-primary">
        							
                      <tr>
        								 <th width="15%">Image</th><th width="15%">Image Path</th><th width="25%">Title</th><th width="30%">Subtitle</th><th width="15%">Action</th>
        							</tr>
        						</thead>
        						<tbody>
                      <?php foreach ($gallery_setup as $key=>$ss): ?>
                      <tr><td><img  src="<?php echo base_url('site_assets/uploads/gallery/thumbnail/'.$ss['gallery_image_name']); ?>"></td><td><?php echo $ss['gallery_image_url']?></td><td><?php echo $ss['gallery_title']?></td><td><?php echo $ss['gallery_subtitle']?></td><td><a onclick="return confirm('Are you sure you want to delete?')" href="<?php echo base_url('admin/gallery_setup/delete/'.$ss['gallery_id']); ?>" class="btn btn-danger">Delete</a></td></tr>
                    <?php endforeach; ?>
                    </tbody>
        					</table>        			
        
</div>
</div>
                	</div>
               
            </div>
</div>
</div>
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
   <?php echo form_open_multipart('admin/gallery_setup/do_upload'); ?> 
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add gallery</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="col-lg-12">
       	<div class="input-group mb-3">
  			<div class="input-group-prepend">
    			<span class="input-group-text">Choose Image</span>
  			</div>
  			<input type="file" required="required"  class="form-control" name="userfile" id="userfile" >
		</div>
			<div class="input-group mb-3">
  			<div class="input-group-prepend">
    			<span class="input-group-text">Gallery Title</span>
  			</div>
  			<input  class="form-control" name="gallery_title" id="gallery_title" >
		</div>
		<div class="input-group mb-3">
  			<div class="input-group-prepend">
    			<span class="input-group-text">Gallery Subtitle</span>
  			</div>
  			<input  class="form-control" name="gallery_subtitle" id="gallery_subtitle" required="" >
		</div>
       </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
<?php echo form_close(); ?>
  </div>
</div>

