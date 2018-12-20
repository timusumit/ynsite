  <div class="content">
        <div class="container-fluid">

<div class="row">
                	
                	<div class="col-lg-12">
                	<div class="card">
                    <div class="card-header card-header-primary">
                  <h4 class="card-title ">Contact Setup</h4>
                  <p class="card-category">Setup The Contact Part Here!</p>
                </div>
                		<div class="card-body">
                <?php echo form_open('admin/contact_setup/add'); ?>     
        					<table class="table table-hover">
        					
        						<thead class="text-primary">
        							
                      <tr>
        								 <th width="40%">Map</th><th width="15%">Address</th><th width="15%">Phone</th><th width="15%">Email</th><th width="15%">Action</th>
        							</tr>
        						</thead>
        						<tbody>
        						<?php  foreach ($contact_about as $key=>$data):?>	
                      
                      <tr>
        								<td>
                          <textarea name="map_plugin" class="form-control"><?php echo $data['map_plugin'] ?></textarea>
                        </td>
                        <td>
                          <input type="text" class="form-control" name="address" value="<?php echo $data['address'] ?>">
                        </td>
                        <td>
                          <input type="text" class="form-control" name="phone" value="<?php echo $data['phone'] ?>">
                        </td>
                        <td>
                          <input type="text" class="form-control" name="email" value="<?php echo $data['email'] ?>">
                        </td>
                          <td><button type="submit" href="#" class="btn btn-success">Update</button></td>
        							</tr>
        						<?php endforeach; ?>
                    </tbody>
        					</table>
                  <?php echo form_close(); ?>

                <?php  foreach ($contact_about as $key=>$data):?>   
                  <div class="col-lg-12">
                    <h4 class="text-primary">Map Preview</h4>
                    <?php echo $data['map_plugin'] ?></div>     
                  <?php endforeach; ?>   			
        
</div>
</div>
                	</div>
               
            </div>
</div>
</div>

<style>
iframe{
  height: 200px !important; width: 300px !important;
}
  </style>
