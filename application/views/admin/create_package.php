  <div class="content">
        <div class="container-fluid">

<div class="row">
                	
                	<div class="col-lg-12">
                	<div class="card">
                    <div class="card-header card-header-primary">
                  <h4 class="card-title ">Create package</h4>
                  <p class="card-category">Add/Edit/Delete Inner Page!</p>
                </div>
                		<div class="card-body">
                      <div class="col-lg-12 text-right"><a href="#" data-target="#addModal" data-toggle="modal" class="btn btn-success">ADD</a></div>
        					<table class="table table-hover">
        					
        						<thead class="text-primary">
        							
                      <tr>
        								 <th>Page Name</th><th>Main Price</th><th>Disk Space</th><th>Bandwidth</th><th>Extra Feature</th><th>Renew Price</th><th width="20%">Action</th>
        							</tr>
        						</thead>
        						<tbody>
                      <?php foreach($package_setup as $key=>$data): ?>
        					<tr><td><?php echo $data['package_name'] ?></td><td><?php echo $data['main_price'] ?></td><td><?php echo $data['disk_space'] ?></td>
                    <td><?php echo $data['bandwidth'] ?></td>
                     <td><?php echo $data['extra_feature'] ?></td>
                      <td><?php echo $data['renew_price'] ?></td>
                  <td>
                    <a data-target="#editModal"
                      data-package_id="<?php echo $data['package_id']  ?>"
                      data-package_name="<?php echo $data['package_name'] ?>"
                      data-main_price="<?php echo $data['main_price']  ?>"
                      data-disk_space="<?php echo $data['disk_space']  ?>"
                      data-bandwidth="<?php echo $data['bandwidth']  ?>"
                      data-extra_feature="<?php echo $data['extra_feature'] ?>"
                      data-renew_price="<?php echo $data['renew_price']  ?>"
                      data-toggle="modal" class="btn btn-warning btn-sm editPage">Edit</a>&nbsp;<a onclick="return confirm('Do you really want to delete?')" class="btn btn-danger btn-sm" href="<?php echo base_url('admin/package_setup/delete/'.$data['package_id'])?>">Delete</a></td></tr>
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
   <?php echo form_open('admin/package_setup/add'); ?> 
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Package</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="col-lg-12">
       	<div class="input-group mb-3">
  			<div class="input-group-prepend">
    			<span class="input-group-text">Package Name</span>
  			</div>
  			<input type="text"  class="form-control" name="package_name" id="package_name" required="">
		</div>
			<div class="input-group mb-3">
  			<div class="input-group-prepend">
    			<span class="input-group-text">Main Price</span>
  			</div>
  			<input  class="form-control" name="main_price" id="main_price" required="">
		</div>

		<div class="input-group mb-3">
  			<div class="input-group-prepend">
    			<span class="input-group-text">Disk Space</span>
  			</div>
  			<input type="text" class="form-control"  name="disk_space" id="disk_space" required="">
		</div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Bandwidth</span>
        </div>
        <input type="text" class="form-control"  name="bandwidth" id="bandwidth" required="">
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Extra Feature</span>
        </div>
        <input type="text" class="form-control"  name="extra_feature" id="extra_feature" required="">
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Renew Price</span>
        </div>
        <input type="text" class="form-control"  name="renew_price" id="renew_price" required="">
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

<script type="text/javascript">
   $(function(){
        $(document).on("click", ".editPage", function () {
            var package_id = $(this).data('package_id');
            var main_price= $(this).data('main_price');
            var package_name= $(this).data('package_name');
            var disk_space=$(this).data('disk_space'); 
            var bandwidth= $(this).data('bandwidth');
            var extra_feature=$(this).data('extra_feature'); 
            var renew_price= $(this).data('renew_price');
            $(".modal-body .input-group #package_name").val(package_name);   
            $(".modal-body .input-group #main_price").val(main_price);
            $(".modal-body .input-group #disk_space").val(disk_space); 
            $(".modal-body .input-group #bandwidth").val(bandwidth);   
            $(".modal-body .input-group #extra_feature").val(extra_feature);
            $(".modal-body .input-group #renew_price").val(renew_price);      

            $("#editModal form").attr('action','package_setup/edit/'+package_id);            
            $('#editModal').modal('show');            
        });
});
</script>

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
   <?php echo form_open(); ?> 
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Package</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="col-lg-12">
        <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Package Name</span>
        </div>
        <input type="text"  class="form-control" name="package_name" id="package_name" required="">
    </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Main Price</span>
        </div>
        <input  class="form-control" name="main_price" id="main_price" required="">
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Disk Space</span>
        </div>
        <input type="text" class="form-control"  name="disk_space" id="disk_space" required="">
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Bandwidth</span>
        </div>
        <input type="text" class="form-control"  name="bandwidth" id="bandwidth" required="">
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Extra Feature</span>
        </div>
        <input type="text" class="form-control"  name="extra_feature" id="extra_feature" required="">
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Renew Price</span>
        </div>
        <input type="text" class="form-control"  name="renew_price" id="renew_price" required="">
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
