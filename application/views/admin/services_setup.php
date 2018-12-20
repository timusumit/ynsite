  <div class="content">
        <div class="container-fluid">

<div class="row">
                	
                	<div class="col-lg-12">
                	<div class="card">
                    <div class="card-header card-header-primary">
                  <h4 class="card-title ">Services Setup</h4>
                  <p class="card-category">Setup The services Part Here!</p>
                </div>
                		<div class="card-body">
                      <div class="col-lg-12 text-right"><a href="#" data-target="#addModal" data-toggle="modal" class="btn btn-success">ADD</a></div>
        					<table class="table table-hover">
        					
        						<thead class="text-primary">
        							
                      <tr>
        								 <th width="15%">Service Name</th><th width="40%">Service Detail</th><th width="15%">Action</th>
        							</tr>
        						</thead>
        						<tbody>
        						<?php  foreach ($services_setup as $key=>$data):?>	
                      
                      <tr>
        								<td><?php echo $data['service_title'] ?></td><td><?php echo $data['service_content'] ?></td><td>

                          <a href="#" class="btn btn-warning editServices" data-target="#editModal" data-service_id="<?php echo $data['service_id'] ?>" data-service_title="<?php echo $data['service_title'] ?>" data-service_content="<?php echo $data['service_content'] ?>" data-toggle="modal">Edit</a>&nbsp;<a onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger" href="<?php echo base_url('admin/services_setup/delete/'.$data['service_id']); ?>">Delete</a></td>
        							</tr>
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
   <?php echo form_open('admin/services_setup/add'); ?> 
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add services</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="col-lg-12">
          <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Service Title:</span>
        </div>
        <input  class="form-control" name="service_title" id="service_title" >
    </div>

       	<div class="input-group mb-3">
  			<div class="input-group-prepend">
    			<span class="input-group-text">Service Content:</span>
  			</div>
  			<textarea  class="form-control " name="service_content" id="service_content" ></textarea>
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
    $(function(){

        $(document).on("click", ".editServices", function () {

            var service_id = $(this).data('service_id');
            var service_title= $(this).data('service_title');
            var service_content=$(this).data('service_content');
           
           
            

            $(".modal-body .input-group #service_title").val(service_title);
            $(".modal-body .input-group #service_content").val(service_content);            
           
          
            $("#editModal form").attr('action','services_setup/edit/'+service_id);            
            $('#editModal').modal('show');
            
        });
});


</script>


<!-- edit modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
   <form method="post">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit services</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="col-lg-12">
          <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Service Title:</span>
        </div>
        <input  class="form-control" name="service_title" id="service_title" >
    </div>

        <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Service Content:</span>
        </div>
        <textarea  class="form-control " name="service_content" id="service_content" ></textarea>
    </div>
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
</form>
  </div>
</div>
