
<?php echo $this->session->flashdata('verify_msg'); ?>
  <div class="content">
        <div class="container-fluid">
  <div class="container">
    <div class="col-lg-4 col-md-6 col-sm-6 ml-auto mr-auto">
      <?php $attributes = array("name" => "loginform");
echo form_open("user/login", $attributes);?>
        <div class="card card-login">
          <div class="card-header card-header-rose text-center">
            <h4 class="card-title">Login</h4>
     
          </div>
          <div class="card-body ">
            <p class="card-description text-center">Use Your Credentials.</p>
          
            <span class="bmd-form-group">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">email</i>
                  </span>
                </div>
                <input type="email" class="form-control" name="email" placeholder="Email...">
              </div>
               <span style="color:red"><?php echo form_error('email'); ?></span>
            </span>
            <span class="bmd-form-group">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">lock_outline</i>
                  </span>
                </div>
                <input type="password" class="form-control" placeholder="Password..." name="password">
              </div>
              <span style="color:red"><?php echo form_error('password'); ?></span>
            </span>
          </div>
          <div class="card-footer justify-content-center">
            <button type="submit" class="btn btn-rose btn-link btn-lg">Login</button>
          </div>
        </div>
     <?php echo form_close(); ?>
    </div>
  </div>
</div>
</div>

 