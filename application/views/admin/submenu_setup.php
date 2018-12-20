  <div class="content">
        <div class="container-fluid">

<div class="row">
                	
                	<div class="col-lg-12">
                	<div class="card">
                    <div class="card-header card-header-primary">
                  <h4 class="card-title ">Sub Menu Setup</h4>
                  <p class="card-category">Setup The sub menu Part Here!</p>
                </div>
                		<div class="card-body">
                      <div class="col-lg-12 text-right"><a href="#" data-target="#addModal" data-toggle="modal" class="btn btn-success">ADD</a></div>
        					<table class="table table-hover">
        					
        						<thead class="text-primary">
        							
                      <tr>
        								 <th width="40%">Page Menu</th><th width="15%">Sub Menu</th><th width="15%">Menu Order</th><th width="15%">Action</th>
        							</tr>
                      <?php foreach($submenu as $data): ?>
                        <tr><td><?php echo $data['page_title'] ?></td><td><?php echo $data['sms_title'] ?></td><td><?php echo $data['sms_order'] ?></td><td><a onclick="return confirm('Are you sure you want to delete?')" href="<?php echo base_url('admin/submenu_setup/delete/'.$data['sms_id']); ?>" class="btn btn-danger">Delete</a></td></tr>
                      <?php endforeach; ?>
        						</thead>
        						<tbody>
        					
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
   <?php echo form_open('admin/submenu_setup/add'); ?> 
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add menu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="col-lg-12">
      
		
	




    <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Enter Sub Menu Title</span>
        </div>
        <input  class="form-control" name="sms_title" id="sms_title" >
    </div>

  <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Select Parent Menu</span>
        </div>
      <select class="form-control" name="sms_ms_id" id="sms_ms_id">
      <?php foreach($menu_setup as $key=>$smdata): ?>
        <option value="<?php echo $smdata['ms_id'] ?>"><?php echo $smdata['ms_title'] ?></option>
      <?php endforeach; ?>
      </select>
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Select Page</span>
        </div>
     <select class="form-control" name="sms_page_id" id="sms_page_id">
      <?php foreach($create_page as $key=>$cpdata): ?>
        <option value="<?php echo $cpdata['page_id'] ?>"><?php echo $cpdata['page_title'] ?></option>
      <?php endforeach; ?>
      </select>
     
      </div>



      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Select Order</span>
        </div>
        <input type="text"  class="form-control" name="sms_order" id="sms_order" >
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
<style>
iframe{
  height: 200px !important; width: 300px !important;
}
  </style>
