<div class="content-wrapper">
        <section class="content-header">
          <h1>
            Header Editor Logo
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
                  <h3 class="box-title">Informasi Dan Logo</h3>
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <table class="table table-striped">
                    <tr>
                      <th style="width: 10px">No</th>
                      <th></th>
                      <th>Image</th>
                      <th></th>
                    </tr>
                    <?php 
                      foreach ($data_header as $key => $value) {                    
                    ?>
                    <tr>
                      <td>1.</td>
                      <td>INFORMASI</td>
                      <td><?php echo $value['informasi']; ?></td>
                      <td><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Edit</button></td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>LOGO ATAS</td>
                      <td><img class="img-responsive" width="500px" src="<?php echo base_url(); ?>assets/web_page/images/logo/<?php echo $value['logo']; ?>" alt="User profile picture"></td>
                      <td><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal2">Edit</button></td>
                    </tr>
                    <?php } ?>

                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>

            <div class="col-md-4">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Quick Example</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <?php echo form_open_multipart('web_page/header_logo_submit'); ?>
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Informasi</label>
                      <input required type="text" name="informasi" class="form-control" id="exampleInputEmail1" placeholder="Enter Informasi">
                    </div>

                    <div class="form-group ">
                      <label for="exampleInputFile">Image logo</label>
                      <input required type="file" name="upload" id="exampleInputFile">
                      <p class="help-block">ukuran image 454 x 59 pixels</p>
                      <p class="help-block">File harus .jpg|png|gif.</p>
                    </div>

                      <input style="display: none;" name="id" value="<?= $id ?>">
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <?php 
                      if (count($data_header) == 0) {
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
    
    <?php echo form_open_multipart('web_page/header_edit_inform/'.$id); ?>
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Informasi</h4>
        </div>
        <div class="modal-body">
        <?php 
          foreach ($data_header as $key => $value) {                    
    ?>
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Informasi</label>
              <input type="text" value="<?php echo $value['informasi']; ?>" name="informasi" class="form-control" required placeholder="Enter Facebook">
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


  <!-- Modal -->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
    <?php echo form_open_multipart('web_page/header_edit_image/'.$id); ?>
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Logo</h4>
        </div>
        <div class="modal-body">
        <?php 
          foreach ($data_header as $key => $value) {                    
    ?>
          <div class="box-body">
            <div class="form-group ">
              <label for="exampleInputFile">Image logo</label>
              <input required value="<?php echo $value['logo']; ?>" type="file" name="upload" id="exampleInputFile">
              <p class="help-block">ukuran image 454 x 59 pixels</p>
              <p class="help-block">File harus .jpg|png|gif.</p>
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
