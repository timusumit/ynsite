  <div class="content">
        <div class="container-fluid">

<div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Appointments</h4>
                  <p class="card-category">Color Codes for Status: <span class="bg-warning text-dark">Unseen</span> <span class="bg-success">Confirmed</span> <span class="bg-danger">Cancelled</span></p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover" id="appointment">
                      <thead class=" text-primary">
                        <th>S.N</th><th>Name</th><th>Email</th><th>Phone</th><th>Date of Appointment</th><th>Status</th><th>Action</th>
                      </thead>
                    <tbody class="">
                    	<?php foreach($add_appointment as $key=>$data): ?>
                    	
                    	<tr><td><?php echo $key; ?></td><td><?php echo $data['firstname'] ?></td><td><?php echo $data['email'] ?></td><td><?php echo $data['phone'] ?></td><td><?php echo $data['date'] ?></td>
                          <td><?php echo $data['app_status'] ?></td>
                        <td>
                      <a href="<?php echo base_url('admin/appointments/app_status/'.$data['app_id'].'/confirmed'); ?>" class="book_confirm btn btn-success btn-sm 

                          <?php 
                          if($data['app_status']=="confirmed"){
                            echo "disabled";
                          }
                          

                          ?>
                        " >
                          <?php 
                          if($data['app_status']=="confirmed"){
                            echo "Confirmed";
                          }
                          else{
                            echo "Confirm";
                          }

                          ?>

                      </a>&nbsp;<a href="<?php echo base_url('admin/appointments/app_status/'.$data['app_id'].'/unseen'); ?>" class="book_hold btn btn-warning btn-sm  <?php 
                          if($data['app_status']=="unseen"){
                            echo "disabled";
                          }?>">
                        <?php 
                          if($data['app_status']=="unseen"){
                            echo "On Hold";
                          }
                          else{
                            echo "Hold";
                          }

                          ?>
                      </a>&nbsp;<a href="<?php echo base_url('admin/appointments/app_status/'.$data['app_id'].'/cancelled'); ?>" class="book_cancel btn btn-danger btn-sm <?php 
                          if($data['app_status']=="cancelled"){
                            echo "disabled";
                          }?>">
                          <?php 
                          if($data['app_status']=="cancelled"){
                            echo "Cancelled";
                          }
                          else{
                            echo "Cancel";
                          }

                          ?>
                      </a>      
                        </td></tr> 

                    	                    	<?php  endforeach; ?>
                    </tbody>	
                    </table>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
</div>
</div>

<div class="modal fade" id="change_status" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Change Status</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <a href="#" class="btn btn-warning">Confirm</a>
        <a href="#" class="btn btn-success">Done</a>
        <a href="#" class="btn btn-danger">Cancel</a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>