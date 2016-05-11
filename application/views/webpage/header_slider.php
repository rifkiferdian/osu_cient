<div class="content-wrapper">
        <section class="content-header">
          <h1>
            Header Editor Slider
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
                      <th>Image</th>
                      <th>Text Atas</th>
                      <th>Text Tengah</th>
                      <th>Text Bawah</th>
                      <th>Action</th>
                    </tr>
                    <?php 
                    	foreach ($data_slider as $key => $value) {                  	
					           ?>

                    <tr>
                      <td><img class="img-responsive" width="100px" src="<?php echo base_url(); ?>assets/web_page/images/slider/<?php echo $value['image']; ?>" alt="User profile picture"></td>
                      <td><?php echo $value['text_atas']; ?></td>
                      <td><?php echo $value['text_tengah']; ?></td>
                      <td><?php echo $value['text_bawah']; ?></td>
                      <td>
                        <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal<?php echo $value['id']; ?>"><i class="fa fa-edit"></i></button>
                        <a href="<?= site_url(); ?>/web_page/header_slider_delete/<?= $value['id']; ?>" type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>

                        <!-- Modal -->
                              <div class="modal fade" id="myModal<?php echo $value['id']; ?>" role="dialog">
                                <div class="modal-dialog">
                                
                                <?php echo form_open_multipart('web_page/header_edit_slider/'.$id); ?>
                                  <!-- Modal content-->
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      <h4 class="modal-title">Slider Edit</h4>
                                    </div>
                                    <div class="modal-body">

                                      <div class="box-body">
                                        <div class="form-group ">
                                          <label for="exampleInputFile">Image Slider</label>
                                          <input type="file" name="upload" id="exampleInputFile">
                                          <p class="help-block">ukuran image 1302 x 400 pixels</p>
                                          <p class="help-block">File harus .jpg|png|gif.</p>
                                        </div>

                                        <div class="form-group">
                                          <label for="exampleInputEmail1">Text Atas</label>
                                          <input type="text" value="<?php echo $value['text_atas']; ?>" name="atas" class="form-control" required >
                                        </div>

                                        <div class="form-group">
                                          <label for="exampleInputEmail1">Text Tengah</label>
                                          <input type="text" value="<?php echo $value['text_tengah']; ?>" name="tengah" class="form-control" required >
                                        </div>

                                        <div class="form-group">
                                          <label for="exampleInputEmail1">Text Bawah</label>
                                          <input type="text" value="<?php echo $value['text_bawah']; ?>" name="bawah" class="form-control" required >
                                        </div>
                                          <input style="display: none;" name="id" value="<?= $value['id']; ?>">
                                      </div><!-- /.box-body -->
                                      
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                  </div>
                                  <?php echo form_close(); ?>
                                  
                                </div>
                              </div>
                      </td>
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
                <?php echo form_open_multipart('web_page/header_slider_submit'); ?>
                  <div class="box-body">
                    <div class="form-group ">
                      <label for="exampleInputFile">Image Slider</label>
                      <input required type="file" name="upload" id="exampleInputFile">
                      <p class="help-block">ukuran image 1302 x 400 pixels</p>
                      <p class="help-block">File harus .jpg|png|gif.</p>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Text Atas</label>
                      <input type="text" name="atas" class="form-control" required placeholder="Enter Text Atas">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Text Tengah</label>
                      <input type="text" name="tengah" class="form-control" required placeholder="Enter ext Tengah">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Text Bawah</label>
                      <input type="text" name="bawah" class="form-control" required placeholder="Enter Text Bawah">
                    </div>
                      <input style="display: none;" name="id" value="<?= $id ?>">

                  </div><!-- /.box-body -->

                  <div class="box-footer">
	                  	<button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                <?php echo form_close(); ?>
              </div><!-- /.box -->
            </div>
            </div>
        </section><!-- /.content -->
</div><!-- /.content-wrapper -->





