  <div class="content">
        <div class="container-fluid">

<div class="row">
                	
                	<div class="col-lg-12">
                	<div class="card">
                    <div class="card-header card-header-primary">
                  <h4 class="card-title ">Slider Setup</h4>
                  <p class="card-category">The Home Page Slider Setup is done here.</p>
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
                      <?php foreach ($slider_setup as $key=>$ss): ?>
                      <tr><td><img style="max-width: 50px;" src="<?php echo base_url('site_assets/uploads/slider/'.$ss['slider_image_name']); ?>"></td><td><?php echo $ss['slider_image_url']?></td><td><?php echo $ss['slider_title']?></td><td><?php echo $ss['slider_subtitle']?></td><td><a onclick="return confirm('Are you sure you want to delete?')" href="<?php echo base_url('admin/slider_setup/delete/'.$ss['slider_id']); ?>" class="btn btn-danger">Delete</a></td></tr>
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
   <?php echo form_open_multipart('admin/slider_setup/do_upload'); ?> 
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Slider</h5>
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
    			<span class="input-group-text">Slider Title</span>
  			</div>
  			<input  class="form-control" name="slider_title" id="slider_title" >
		</div>
		<div class="input-group mb-3">
  			<div class="input-group-prepend">
    			<span class="input-group-text">Slider Subtitle</span>
  			</div>
  			<input  class="form-control" name="slider_subtitle" id="slider_subtitle" >
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

