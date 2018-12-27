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
                    <a data-target="#editModal" class="btn btn-warning btn-sm editPage">Edit</a>&nbsp;<a onclick="return confirm('Do you really want to delete?')" class="btn btn-danger btn-sm" href="<?php echo base_url('admin/create_package/delete/'.$data['package_id'])?>">Delete</a></td></tr>
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
   <?php echo form_open_multipart('admin/package_setup/add'); ?> 
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
       //   alert('hey');
           
           //var post_type =$(this).data('post_type');
         //  alert(post_type);
            var page_id = $(this).data('page_id');
          //  var event_location = $(this).data('event_location');
            var page_title= $(this).data('page_title');
            var page_content=$(this).data('page_content'); 
          //  alert(page_content); 
         //   var post_author=$(this).data('post_author'); 
       //     var page_image_name=$(this).data('page_image_name');
           // var post_image_url=$(this).data('post_image_url');  
           // alert(post_image_url);  
          //  alert(post_author);     
            CKEDITOR.instances['page_content'].setData(page_content);/*yeti gare pugne maal*/

          //  CKEDITOR.instance.insertHTML(page_content);
            $(".modal-body .input-group #page_title").val(page_title);
         //   $(".modal-body .input-group #post_type").val(post_type);
            $(".modal-body .input-group #page_content").val(page_content);            
           // $(".modal-body .input-group #event_location").val(event_location);
         //   $(".modal-body .input-group #post_author").val(post_author);
          //  $(".modal-body .input-group #page_image_name").val(page_image_name);
           // $(".modal-body .input-group #post_image_url").val(post_image_url);
            $("#editModal form").attr('action','create_page/edit/'+page_id);            
            $('#editModal').modal('show');
            
        });
});
</script>


<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
   <?php echo form_open_multipart(); ?> 
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit page</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="col-lg-12">
        <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Page Title</span>
        </div>
        <input type="text"  class="form-control" name="page_title" id="page_title" >
    </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Content</span>
        </div>
        <textarea  class="form-control ckeditor" name="page_content" id="page_content" ></textarea>
    </div>
  <!--  <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Author</span>
        </div>
        <input  class="form-control" name="page_author" id="author"  value="<?php echo ucfirst($titlename); ?>">
    </div> -->
    <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Image</span>
        </div>
        <input type="file" class="form-control"  name="userfile" id="userfile" >
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
