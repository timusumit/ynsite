  <div class="content">
        <div class="container-fluid">

<div class="row">
                	
                	<div class="col-lg-12">
                	<div class="card">
                    <div class="card-header card-header-primary">
                  <h4 class="card-title ">Vision, Mission, Importance Setup</h4>
                  <p class="card-category">Setup The Vision, Mission, Importance Part Here!</p>
                </div>
                		<div class="card-body">
                      <div class="col-lg-12 text-right"></div>
        					<?php echo form_open('admin/vmi_setup/add')?>
                  <table class="table table-hover">
        					
        						<thead class="text-primary">
        							
                      <tr>
        								 <th width="30%">Vision</th><th width="30%%">Mission</th><th width="30%">Introduction</th><th width="10%">Action</th>
        							</tr>
        						</thead>
        						<tbody>
        						<?php  foreach ($vmi_setup as $key=>$data):?>	
                      
                      <tr>
        								<td>
                          <textarea class="form-control" name="vision" id="vision"><?php echo $data['vision'] ?></textarea>           
                          </td>
                        <td><textarea class="form-control" name="mission" id="mission"><?php echo $data['mission'] ?></textarea> </td>
                        <td><textarea class="form-control" name="introduction" id="introduction"><?php echo $data['introduction'] ?></textarea> </td>
                        <td><button type="submit" class="btn btn-success">UPDATE</buttom></td>
        							</tr>
        						<?php endforeach; ?>
                    </tbody>
        					</table>   
                  <?php echo form_close(); ?>     			
        
</div>
</div>
                	</div>
               
            </div>
</div>
</div>

