  <div class="content">
        <div class="container-fluid">

<div class="row">
                	
                	<div class="col-lg-12">
                	<div class="card">
                    <div class="card-header card-header-primary">
                  <h4 class="card-title ">Inquiries</h4>
                  <p class="card-category">Here You will see the inquiries you got from contact page</p>
                </div>
                		<div class="card-body">
                      <div class="col-lg-12 text-right"></div>
        					<?php echo form_open('admin/vmi_setup/add')?>
                  <table class="table table-hover" id="inquiry">
        					
        						<thead class="text-primary " >
        							
                      <tr>
        								 <th width="25%">Name</th><th width="25%">Email</th><th width="20%">Subject</th><th width="20%">Message</th><th width="10%">Action</th>
        							</tr>
        						</thead>
        						<tbody>
        						<?php  foreach ($inquiry as $key=>$data):?>	
                      
                      <tr>
        								<td>
                          <?php echo $data['name'] ?>
                          </td>
                        <td><?php echo $data['email'] ?> </td>
                        <td><?php echo $data['subject'] ?></td>
                           <td><?php echo $data['message'] ?></td>
                        <td><a onclick="return confirm('Do you want to delete?')" class="btn btn-danger" href="<?php echo base_url('admin/inquiry/delete/'.$data['inquiry_id']) ?>">Delete</a></td>
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

