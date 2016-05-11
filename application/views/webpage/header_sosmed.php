<div class="content-wrapper">
        <section class="content-header">
          <h1>
            Header Editor Sosmed
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Header</a></li>
            <li class="active">Editor</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content" style=" min-height: 850px;">
          
            <div class="col-md-12">
              <div class="col-md-8">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Sosial Media</h3>
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <table class="table table-striped">
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Sosmed</th>
                      <th>Link</th>
                      <th><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Edit</button></th>
                    </tr>
                    <?php 
                    	foreach ($data_sosmed as $key => $value) {                  	
					           ?>
                    <tr>
                      <td>1.</td>
                      <td>Facebook</td>
                      <td><?php echo $value['facebook']; ?></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>Twitter</td>
                      <td><?php echo $value['twitter']; ?></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>Google Plus</td>
                      <td><?php echo $value['google_plus']; ?></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>4.</td>
                      <td>Youtube</td>
                      <td><?php echo $value['youtube']; ?></td>
                      <td></td>
                    </tr>
                    <?php } ?>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>

            <div class="col-md-4">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Sosial Media</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <?php echo form_open_multipart('web_page/header_sosmed_submit'); ?>
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Facebook</label>
                      <input type="text" name="facebook" class="form-control" required placeholder="Enter Facebook">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Twitter</label>
                      <input type="text" name="twitter" class="form-control" required placeholder="Enter Twitter">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Google Plus</label>
                      <input type="text" name="google" class="form-control" required placeholder="Enter Google Plus">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Youtube</label>
                      <input type="text" name="youtube" class="form-control" required placeholder="Enter Youtube">
                    </div>
                      <input style="display: none;" name="id" value="<?= $id ?>">

                  </div><!-- /.box-body -->

                  <div class="box-footer">
                  <?php 
	                  if (count($data_sosmed) == 0) {
	                  	echo "<button type=\"submit\" class=\"btn btn-primary\">Submit</button>";
	                  }
                  ?>
                  </div>
                <?php echo form_close(); ?>
              </div><!-- /.box -->
            </div>
            </div>
        </section><!-- /.content -->
</div><!-- /.content-wrapper -->

<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
		<?php echo form_open_multipart('web_page/header_sosmed_edit/'.$id); ?>
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Sosmed Edit</h4>
        </div>
        <div class="modal-body">
        <?php 
        	foreach ($data_sosmed as $key => $value) {                  	
		?>
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Facebook</label>
              <input type="text" value="<?php echo $value['facebook']; ?>" name="facebook" class="form-control" required placeholder="Enter Facebook">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Twitter</label>
              <input type="text" value="<?php echo $value['twitter']; ?>" name="twitter" class="form-control" required placeholder="Enter Twitter">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Google Plus</label>
              <input type="text" value="<?php echo $value['google_plus']; ?>" name="google" class="form-control" required placeholder="Enter Google Plus">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Youtube</label>
              <input type="text" value="<?php echo $value['youtube']; ?>" name="youtube" class="form-control" required placeholder="Enter Youtube">
            </div>
              <input style="display: none;" name="id" value="<?= $id ?>">
          </div><!-- /.box-body -->
       <?php } ?>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
      <?php echo form_close(); ?>
      
    </div>
  </div>




