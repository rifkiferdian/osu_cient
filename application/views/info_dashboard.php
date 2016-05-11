<div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <?php 
        if ($dt == 0) {
          echo '<div class="modal fade in" aria-hidden="false" id="myModal" role="dialog" style="display: block; padding-right: 15px;">
              <div class="modal-dialog">
              
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Modal Info</h4>
                  </div>
                  <div class="modal-body">
                    <p>SIlahkan Lengkapi dulu data Universitas Anda...!</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" onclick="asas()" class="btn btn-primary" data-dismiss="modal">Ok</button>
                  </div>
                </div>
                
              </div>
            </div>';
        }
         ?>

        
</div><!-- /.content-wrapper -->

      <script type="text/javascript">
        function asas(){
          window.location.href = "<?php echo site_url('dashboard/add_data_client'); ?>";
        }
      </script>