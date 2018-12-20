  <div class="content">
        <div class="container-fluid">

<div class="row">
                	
                	<div class="col-lg-12">
                	<div class="card">
                    <div class="card-header card-header-primary">
                  <h4 class="card-title ">Menu Setup</h4>
                  <p class="card-category">Setup The menu Part Here!</p>
                </div>
                		<div class="card-body">
                      <div class="col-lg-12 text-right"><a href="#" data-target="#addModal" data-toggle="modal" class="btn btn-success">ADD</a></div>
        					<table class="table table-hover">
        					
        						<thead class="text-primary">
        							
                      <tr>
        								 <th width="40%">Menu Name</th><th width="15%">Page Id</th><th width="15%">Menu Order</th><th width="15%">Action</th>
        							</tr>
                      
        						</thead>
        						<tbody>
        						<?php  foreach ($menu_setup as $key=>$data):?>	
                      
                      <tr>
        								<td><?php echo $data['ms_title'] ?></td><td><?php echo $data['ms_page_id'] ?></td><td><?php echo $data['ms_order'] ?></td><td><a onclick="return confirm('Are you sure you want to delete?')" href="<?php echo base_url('admin/menu_setup/delete/'.$data['ms_id']); ?>" class="btn btn-danger">Delete</a></td>
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
  <div class="modal-dialog" role="document">
   <?php echo form_open('admin/menu_setup/add'); ?> 
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
    			<span class="input-group-text">Select Page</span>
  			</div>
  		<select class="form-control" name="ms_page_id" id="ms_page_id">
        <option>Select This For Parent Menu</option>
      <?php foreach($create_page as $key=>$cpdata): ?>
        <option value="<?php echo $cpdata['page_id'] ?>"><?php echo $cpdata['page_title'] ?></option>
      <?php endforeach; ?>
      </select>
		</div>
		<div class="input-group mb-3">
  			<div class="input-group-prepend">
    			<span class="input-group-text">Menu Title</span>
  			</div>
  			<input  class="form-control" name="ms_title" id="ms_title" >
		</div>

      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Menu Order</span>
        </div>
        <input type="text"  class="form-control" name="ms_order" id="ms_order" >
    </div>


   <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Will it have Sub menu?</span>
        </div>
        <input type="checkbox"  class="form-control" name="ms_has_sub" id="ms_has_sub" value="1" >
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
