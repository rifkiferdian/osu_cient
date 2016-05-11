<div class="content-wrapper">
        <section class="content-header">
          <h1>
            Content Editor
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
                  <h3 class="box-title">Content and Image</h3>
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  
                <table class="table table-striped">
                    <tr>
                      <th></th>
                      <th></th>
                      <th></th>
                    </tr>
                    <?php 
                      foreach ($data_content as $key => $value) {                    
                     ?>

                    <tr>
                      <th>Image</th>
                      <td></td>
                      <td><img class="img-responsive" width="300px" src="<?php echo base_url(); ?>assets/web_page/images/content/<?php echo $value['image']; ?>" alt="User profile picture"></td>
                    </tr>
                    <tr>
                      <th>judul Caption</th>
                      <td></td>
                      <td><?php echo $value['title_caption']; ?></td>
                    </tr>
                    <tr>
                      <th>Caption</th>
                      <td></td>
                      <td><?php echo $value['caption']; ?></td>
                    </tr>
                    <tr>
                      <th>Content</th>
                      <td></td>
                      <td><?php echo $value['content']; ?></td>
                    </tr>
                    <tr>
                      <th>Action</th>
                      <td></td>
                      <td>
                        <a href="<?= site_url(); ?>/web_page_content/delete_content/<?= $value['id']; ?>/<?= $value['image']; ?>" type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>

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
                  <h3 class="box-title">Add Content</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <?php echo form_open_multipart('web_page_content/add_content'); ?>
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Content</label>
                      <!-- <input required type="text" name="informasi" class="form-control" id="exampleInputEmail1" placeholder="Enter Informasi"> -->
                      <textarea style="height: 151px;" name="content" required class="form-control" placeholder="Enter Informasi"></textarea>
                    </div>

                    <div class="form-group ">
                      <label for="exampleInputFile">Image Content</label>
                      <input required type="file" name="upload" id="exampleInputFile">
                      <p class="help-block">ukuran image 1280 x 340 pixels</p>
                      <p class="help-block">File harus .jpg|png|gif.</p>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Caption</label>
                      <input required type="text" name="title" class="form-control" placeholder="Enter Caption">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Informasi caption</label>
                      <input required type="text" name="caption" class="form-control" placeholder="Enter Informasi Caption">
                    </div>

                      <input style="display: none;" name="id" value="<?= $id ?>">
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <?php 
                     
                        if (count($data_content) == 0) {
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


