   <!--    <footer class="footer">
        <div class="container-fluid">
         
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>
            <a href="http://www.yupnep.com" target="_blank">Unique Developers Lab</a> 
          </div>
        </div>
      </footer> -->
    </div>
  </div>

  <script>
    

  </script>
  
  <script src="<?php echo base_url('admin_assets'); ?>/extra-plugin/datatable/jquery.dataTables.min.js" type="text/javascript"></script>
   <script src="<?php echo base_url('admin_assets'); ?>/extra-plugin/datatable/dataTables.bootstrap4.min.js" type="text/javascript"></script>
  <!--   Core JS Files   -->
  
  <script src="<?php echo base_url('admin_assets'); ?>/js/core/popper.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url('admin_assets'); ?>/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url('admin_assets'); ?>/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> -->
  <!-- Chartist JS -->
  <script src="<?php echo base_url('admin_assets'); ?>/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="<?php echo base_url('admin_assets'); ?>/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo base_url('admin_assets'); ?>/js/material-dashboard.min.js?v=2.1.0" type="text/javascript"></script>

 <script src="<?php echo base_url('admin_assets'); ?>/js/bootstrap-selectpicker.js" type="text/javascript"></script>
  


  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="<?php echo base_url('admin_assets'); ?>/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

     
    $('#appointment').DataTable();
    $('#inquiry').DataTable();
    $('#posts').DataTable();


    });
  </script>
</body>

</html>