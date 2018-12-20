
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">help_outline</i>
                  </div>
                  <p class="card-category">Inquiries</p>
                  <h3 class="card-title"><?php $inquiryc=0; foreach ($inquiry as $key=>$data): 
             $inquiryc++;  endforeach; echo $inquiryc; ?>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons text-warning">help_outline</i>
                   Inquiries From Contact Page
                  </div>
                </div>
              </div>
            </div>
          </div>
       
        </div>
      </div>
