<?php echo $this->session->flashdata('verify_msg'); ?>
    <div class="content">
        <div class="container-fluid">
    <div class="row">
      <div class="col-md-10 ml-auto mr-auto">
        <div class="card card-signup">
          <h2 class="card-title text-center">Change Password</h2>
          <div class="card-body">
            <div class="row">
              <div class="col-md-5 ml-auto">
                <div class="info info-horizontal">
                  <div class="icon icon-rose">
                    <i class="material-icons">timeline</i>
                  </div>
                  <div class="description">
                    <h4 class="info-title">Marketing</h4>
                    <p class="description">
                      We've created the marketing campaign of the website. It was a very interesting collaboration.
                    </p>
                  </div>
                </div>
                <div class="info info-horizontal">
                  <div class="icon icon-primary">
                    <i class="material-icons">code</i>
                  </div>
                  <div class="description">
                    <h4 class="info-title">Fully Coded in HTML5</h4>
                    <p class="description">
                      We've developed the website with HTML5 and CSS3. The client has access to the code using GitHub.
                    </p>
                  </div>
                </div>
                <div class="info info-horizontal">
                  <div class="icon icon-info">
                    <i class="material-icons">group</i>
                  </div>
                  <div class="description">
                    <h4 class="info-title">Built Audience</h4>
                    <p class="description">
                      There is also a Fully Customizable CMS Admin Dashboard for this product.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-5 mr-auto">
                <div class="social text-center">
                  <button class="btn btn-just-icon btn-round btn-twitter">
                    <i class="fa fa-twitter"></i>
                  </button>
                  <button class="btn btn-just-icon btn-round btn-dribbble">
                    <i class="fa fa-dribbble"></i>
                  </button>
                  <button class="btn btn-just-icon btn-round btn-facebook">
                    <i class="fa fa-facebook"> </i>
                  </button>
                  <h4 class="mt-3"> or be classical </h4>
                </div>
                 <?php $attributes = array("name" => "registrationform");
echo form_open("user/changepassword", $attributes);?>
                  
                  <div class="form-group has-default bmd-form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">lock_outline</i>
                        </span>
                      </div>
                      <input type="password" required="required" class="form-control" placeholder="Old Password" name="old_password" value="">
                    </div>
                     <span style="color:red"><?php echo form_error('old_password'); ?></span>
                  </div>
                  <div class="form-group has-default bmd-form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">lock_outline</i>
                        </span>
                      </div>
                      <input type="password" required="required" placeholder="New Password..." name="new_password" class="form-control">
                    </div>
                     <span style="color:red"><?php echo form_error('new_password'); ?></span>
                  </div>
                   <div class="form-group has-default bmd-form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">lock_outline</i>
                        </span>
                      </div>
                      <input type="password" required="required" placeholder="Confirm NewPassword..." name="cnew_password" class="form-control">
                    </div>
                     <span style="color:red"><?php echo form_error('new_cpassword'); ?></span>
                  </div>
              <!--     <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" value="" checked="">
                      <span class="form-check-sign">
                        <span class="check"></span>
                      </span>
                      I agree to the
                      <a href="https://demos.creative-tim.com/material-dashboard-pro/examples/pages/register.html#something">terms and conditions</a>.
                    </label>
                  </div> -->
                  <div class="text-center">
                    <button  type="submit" class="btn btn-primary btn-round mt-4">Change Password</button>
                  </div>
                  <div class="text-center">
                 
                      
                  <?php  if(!empty($error_change)){ ?> <span class="alert alert-danger"><?php echo $error_change; ?></span><?php }?>
                  </div>
                 <?php echo form_close(); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
</div>
  


    <p style="color:green; font-style:bold"><?php echo $this->session->flashdata('msg_success'); ?></p>
<p style="color:red; font-style:bold"><?php echo $this->session->flashdata('msg_error'); ?></p>