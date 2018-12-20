  <div class="content">
        <div class="container-fluid">

<div class="row">
                	
                	<div class="col-lg-12">
                	<div class="card">
                    <div class="card-header card-header-primary">
                  <h4 class="card-title ">Create Post</h4>
                  <p class="card-category">Add/Edit/Delete post for Blog!</p>
                </div>
                		<div class="card-body">
                      <div class="col-lg-12 text-right"><a href="#" data-target="#addModal" data-toggle="modal" class="btn btn-success">ADD</a></div>
        					<table class="table table-hover" id="posts">
        					
        						<thead class="text-primary">
        							
                      <tr>
        								 <th width="10%">Post Title</th><th width="10%">Post Type</th><th width="10%">Event Location</th><th width="15%">Content</th><th width="10%">Author</th><th width="10%">Image</th><th width="10%">Date</th><th width="25%">Action</th>
        							</tr>
        						</thead>
        						<tbody>
                      <?php foreach($create_post as $key=>$data): ?>
        					<tr><td><?php echo $data['post_title'] ?></td><td><?php echo $data['post_type'] ?></td><td><?php echo $data['event_location'] ?></td><td><?php echo $data['post_content'] ?></td><td><?php echo $data['post_author'] ?></td><td>
                  <?php if($data['post_image_name']!='no_image'){ ?>
                    <img style="width:80px;" src="<?php echo base_url('site_assets/uploads/blog/thumbnail/'.$data['post_image_name']) ?>">
                      <?php }?>
                  </td><td><?php echo $data['post_date'] ?></td><td><a href="#" data-post_type="<?php echo $data['post_type'] ?>" data-post_id="<?php echo $data['post_id'] ?>" data-post_title="<?php echo $data['post_title'] ?>" data-event_location="<?php echo $data['event_location'] ?>" data-post_content="<?php echo htmlspecialchars($data['post_content']); ?>" data-post_author="<?php echo $data['post_author'] ?>" data-toggle="modal" data-post_image_name="<?php echo $data['post_image_name'] ?>" data-post_image_url="<?php echo htmlspecialchars($data['post_image_url']) ?>" data-target="#editModal" class="btn btn-warning btn-sm editpost">Edit</a>&nbsp;
                    <a onclick="return confirm('Are you sure want to Delete?')" class="btn btn-danger btn-sm" href="<?php echo base_url('admin/create_post/delete/'.$data['post_id'])?>">Delete</a></td></tr>
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
   <?php echo form_open_multipart('admin/create_post/do_upload'); ?> 
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Post</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="col-lg-12">
       	<div class="input-group mb-2">
        <div class="input-group-prepend">
          <span class="input-group-text">Post Type</span>
        </div>
        <select class="form-control" name="post_type" required="required">
          <option value="news">News</option>
          <option value="events">Events</option>
        </select>
    </div>
    <div class="input-group mb-2" id="event_location" style="display: none;">
        <div class="input-group-prepend">
          <span class="input-group-text">Event Location</span>
        </div>
        <input type="text"  class="form-control" name="event_location" id="event_location" value="Kathmandu" >
    </div>
        <div class="input-group mb-2">
  			<div class="input-group-prepend">
    			<span class="input-group-text">Post Title</span>
  			</div>
  			<input type="text"  class="form-control" name="post_title" id="post_title"  required="required" >
		</div>
			<div class="input-group mb-2">
  			<div class="input-group-prepend">
    			<span class="input-group-text">Content</span>
  			</div>
  			<textarea  class="form-control ckeditor" name="post_content" id="post_content"  required="required" ></textarea>
		</div>
    <div class="row">
      <div class="col">
		<div class="input-group mb-2">
  			<div class="input-group-prepend">
    			<span class="input-group-text">Author</span>
  			</div>
  			<input  class="form-control" name="post_author" id="author"  value="<?php echo ucfirst($titlename); ?>">
		</div>
  </div>
  <div class="col">
		<div class="input-group mb-2">
  			<div class="input-group-prepend">
    			<span class="input-group-text">Image</span>
  			</div>
  			<input type="file" class="form-control" name="userfile" id="userfile" >
		</div>
  </div>
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
        $(document).on("click", ".editpost", function () {
       //   alert('hey');
           
           var post_type =$(this).data('post_type');
         //  alert(post_type);
            var post_id = $(this).data('post_id');
            var event_location = $(this).data('event_location');
            var post_title= $(this).data('post_title');
            var post_content=$(this).data('post_content');  
            var post_author=$(this).data('post_author'); 
            var post_image_name=$(this).data('post_image_name');
            var post_image_url=$(this).data('post_image_url');  
           // alert(post_image_url);  
          //  alert(post_author);     
            CKEDITOR.instances['post_content'].setData(post_content);/*yeti gare pugne maal*/

          //  CKEDITOR.instance.insertHTML(page_content);
            $(".modal-body .input-group #post_title").val(post_title);
            $(".modal-body .input-group #post_type").val(post_type);
            $(".modal-body .input-group #post_content").val(post_content);            
            $(".modal-body .input-group #event_location").val(event_location);
            $(".modal-body .input-group #post_author").val(post_author);
            $(".modal-body .input-group #post_image_name").val(post_image_name);
            $(".modal-body .input-group #post_image_url").val(post_image_url);
/*if(post_image_url='no_path'){

  $(".modal-body .input-group #userfile").setAttribute("required","false");
}*/
            $("#editModal form").attr('action','create_post/edit/'+post_id);            
            $('#editModal').modal('show');
            
        });
});
</script>


<!-- Edit Modal-->

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
 <?php echo form_open_multipart(); ?> 
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Post</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="col-lg-12">
        <div class="input-group mb-2">
        <div class="input-group-prepend">
          <span class="input-group-text">Post Type</span>
        </div>
        <select class="form-control" name="post_type" id="post_type">
          <option value="news">News</option>
          <option value="events">Events</option>
        </select>
    </div>
    <div class="input-group mb-2" id="event_location">
        <div class="input-group-prepend">
          <span class="input-group-text">Event Location</span>
        </div>
        <input type="text"  class="form-control" name="event_location" id="event_location" value="Kathmandu" >
    </div>
        <div class="input-group mb-2">
        <div class="input-group-prepend">
          <span class="input-group-text">Post Title</span>
        </div>
        <input type="text"  class="form-control" name="post_title" id="post_title" >
    </div>
      <div class="input-group mb-2">
        <div class="input-group-prepend">
          <span class="input-group-text">Content</span>
        </div>
        <textarea  class="form-control ckeditor" name="post_content" id="post_content" ></textarea>
    </div>
    <div class="row">
      <div class="col">
    <div class="input-group mb-2">
        <div class="input-group-prepend">
          <span class="input-group-text">Author</span>
        </div>
        <input  class="form-control" name="post_author" id="author"  value="<?php echo ucfirst($titlename); ?>">
    </div>
  </div>
  <div class="col">
    <div class="input-group mb-2">
        <div class="input-group-prepend">
          <span class="input-group-text">Image</span>
        </div>
        <input type="file" class="form-control" name="userfile" id="userfile"  >
        <input type="text" style="display: none;" name="post_image_name" id="post_image_name" value="">
        <input type="text" style="display: none;" name="post_image_url" id="post_image_url" value="">
    </div>
  </div>
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


<script>
   $('select[name="post_type"]').on('change', function() {
    var post_type = $(this).val();
         
            switch (post_type) {
            case "events":
                $('#event_location').show();
                break;
            case "news":
                $('#event_location').hide();
                break;   
            default:        
                
                }

   });
</script>
