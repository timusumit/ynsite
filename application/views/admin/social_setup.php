  <div class="content">
        <div class="container-fluid">

<div class="row">
                	
                	<div class="col-lg-12">
                	<div class="card">
                    <div class="card-header card-header-primary">
                  <h4 class="card-title ">facebook, twitter, youtube Setup</h4>
                  <p class="card-category">Setup The facebook, twitter, youtube Part Here!</p>
                </div>
                		<div class="card-body">
                      <div class="col-lg-12 text-right"></div>
        					<?php echo form_open('admin/social_setup/add')?>
                  <table class="table table-hover">
        					
        						<thead class="text-primary">
        							
                      <tr>
        								 <th width="30%">facebook</th><th width="30%%">twitter</th><th width="30%">youtube</th><th width="10%">Action</th>
        							</tr>
        						</thead>
        						<tbody>
        						<?php  foreach ($social_setup as $key=>$data):?>	
                      
                      <tr>
        								<td>
                          <textarea class="form-control" name="facebook" id="facebook"><?php echo $data['facebook'] ?></textarea>           
                          </td>
                        <td><textarea class="form-control" name="twitter" id="twitter"><?php echo $data['twitter'] ?></textarea> </td>
                        <td><textarea class="form-control" name="youtube" id="youtube"><?php echo $data['youtube'] ?></textarea> </td>
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

