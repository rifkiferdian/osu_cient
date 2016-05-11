<div class="content-wrapper">
        <section class="content-header">
          <h1>
            User Profile
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Examples</a></li>
            <li class="active">User profile</li>
          </ol>
        </section>
        <!-- Main content -->
        <section class="content">

          <div class="row">
            <div class="col-md-3">

              <!-- Profile Image -->
              <div class="box box-primary">
                <div class="box-body box-profile">
                  <img class="profile-user-img img-responsive" src="<?php echo base_url(); ?>assets/img/logo/<?php if ($image == '') {echo "logo_d.png";}else{ echo $image;} ?>" alt="User profile picture">
                  <h3 class="profile-username text-center"><?php echo $nama_uni; ?></h3>
                  <p class="text-muted text-center">Universitas <?php echo $jenis_pt; ?></p>

                  <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                      <b>Akreditasi</b> <a class="pull-right"><?php echo $akreditasi; ?></a>
                    </li>
                    <li class="list-group-item">
                      <b>Fakultas</b> <a class="pull-right"><?php echo $jml_fakultas; ?></a>
                    </li>
                    <li class="list-group-item">
                      <b>Prodi</b> <a class="pull-right"><?php echo $jml_prodi; ?></a>
                    </li>
                  </ul>

                  <!-- <a href="#" class="btn btn-primary btn-block"><b>Upload Image</b></a> -->
                  <button type="button" class="btn btn-block btn-info" data-toggle="modal" data-target="#myModal">Upload Image</button>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
            <div class="col-md-9">
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#activity" data-toggle="tab">Bio Data</a></li>
                  <li class=""><a href="#settings" data-toggle="tab">Edit Profile</a></li>
                </ul>
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    
                    <div class="box box-primary">
                        <!-- Post -->
                        <div class="post" style="margin-bottom: 0; padding-bottom: 0; ">
                          <div class="user-block">
                            <span class=''>
                              <div class="box-body" style="    text-align: center; color: black;">
                              <strong><i class="fa fa-file-text-o margin-r-5"></i> BIO</strong>
                              </div><!-- /.box-body -->
                            </span>
                          </div><!-- /.user-block -->
                          <p><?php echo $bio; ?>
                          </p>
                        </div><!-- /.post -->
                        
                        <div class="box">
                          <div class="box-header">
                            <h3 class="box-title">Data Profil</h3>
                          </div><!-- /.box-header -->
                          <div class="box-body no-padding">
                            <table class="table table-striped">
                              <tr>

                              </tr>

                              <tr>
                                <td></td>
                                <td><strong><i class="fa fa-book margin-r-5"></i>  Email</strong></td>
                                <td><?php echo $email; ?></td>
                                <td></td>
                              </tr>
                              <tr>
                                <td></td>
                                <td><strong><i class="fa fa-book margin-r-5"></i>  Singkatan Uni</strong></td>
                                <td><?php echo $singkatan; ?></td>
                                <td></td>
                              </tr>
                              <tr>
                                <td></td>
                                <td><strong><i class="fa fa-book margin-r-5"></i>  Alamat</strong></td>
                                <td><?php echo $alamat; ?></td>
                                <td></td>
                              </tr>
                              <tr>
                                <td></td>
                                <td><strong><i class="fa fa-book margin-r-5"></i>  Website</strong></td>
                                <td><?php echo $website; ?></td>
                                <td></td>
                              </tr>
                              <tr>
                                <td></td>
                                <td><strong><i class="fa fa-book margin-r-5"></i>  Tahun Berdiri</strong></td>
                                <td><?php echo $thn_diri; ?></td>
                                <td></td>
                              </tr>
                             
                            </table>
                          </div><!-- /.box-body -->
                        </div><!-- /.box -->
                    </div><!-- /.box -->

                    
                  </div><!-- /.tab-pane -->
                  

                  <div class="tab-pane" id="settings">
                  <?php echo form_open('/dashboard/edit_data_client_submit'); ?>
                  <?php $error = form_error("singkatan", "<p style='margin-left: 130px;' class='text-danger'>", '</p>'); ?>
                    <div class="form-horizontal">
                      <div class="form-group <?php echo $error ? 'has-error' : '' ?>">
                        <label for="inputName" class="col-sm-2 control-label">Singkatan</label>
                        <div class="col-sm-10">
                          <input type="text" value="<?php echo $singkatan; ?>" class="form-control" id="inputName" name="singkatan" placeholder="Singkatan">
                        </div>
                      </div><?php echo $error; ?>

                      <div class="form-group">
                        <label for="inputSkills" class="col-sm-2 control-label">Alamat</label>
                        <div class="col-sm-10">
                          <input type="text" value="<?php echo $alamat; ?>" class="form-control" id="inputSkills" name="alamat" placeholder="Alamat">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputSkills" class="col-sm-2 control-label">Website</label>
                        <div class="col-sm-10">
                          <input type="text" value="<?php echo $website; ?>" class="form-control" id="inputSkills" name="website" placeholder="Website">
                        </div>
                      </div>


                      <div class="form-group">
                        <label for="inputSkills" class="col-sm-2 control-label">Jenis Universitas</label>
                        <div class="col-sm-8">
                          <select name="jenis_pt" class="form-control select2" style="width: 80%;">
                            <option <?php if ($jenis_pt == "Swasta") echo "selected='selected'";?> >Swasta</option>
                            <option <?php if ($jenis_pt == "Negeri") echo "selected='selected'";?> >Negeri</option>
                          </select>
                        </div>
                      </div><!-- /.form-group -->


                      <div class="form-group">
                        <label for="inputSkills" class="col-sm-2 control-label">Akreditasi</label>
                        <div class="col-sm-8">
                          <select name="akreditasi" class="form-control select2" style="width: 80%;">
                            <option <?php if ($akreditasi == "A") echo "selected='selected'";?> >A</option>
                            <option <?php if ($akreditasi == "B") echo "selected='selected'";?> >B</option>
                            <option <?php if ($akreditasi == "C") echo "selected='selected'";?> >C</option>
                          </select>
                        </div>
                      </div><!-- /.form-group -->

                      <div class="form-group">
                        <label for="inputSkills" class="col-sm-2 control-label">Jumlah Fakultas</label>
                        <div class="col-sm-10">
                          <input type="text" value="<?php echo $jml_fakultas; ?>" class="form-control" id="inputSkills" name="jml_fakultas" placeholder="Jumlah Fakultas">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputSkills" class="col-sm-2 control-label">Jumlah Prodi</label>
                        <div class="col-sm-10">
                          <input type="text" value="<?php echo $jml_prodi; ?>" class="form-control" id="inputSkills" name="jml_prodi" placeholder="Jumlah Prodi">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label for="inputExperience" class="col-sm-2 control-label">BIO</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" id="inputExperience" name="bio" placeholder="BIO"><?php echo $bio; ?></textarea>
                        </div>
                      </div>
                      <input type="text" value="<?php echo $id; ?>" name="id" style="display: none;">

                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                      </div>
                    </div>
                    <?php echo form_close(); ?>
                  </div><!-- /.tab-pane -->
                </div><!-- /.tab-content -->
              </div><!-- /.nav-tabs-custom -->
            </div><!-- /.col -->
          </div><!-- /.row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <script type="text/javascript">
        function asas(){
          window.location.href = "<?php echo site_url('dashboard/add_data_client'); ?>";
        }
      </script>


<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
    <?php echo form_open_multipart('dashboard/upload_profile/'.$id); ?>
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Sosmed Edit</h4>
        </div>
        <div class="modal-body">

          <div class="form-group ">
            <label for="exampleInputFile">Image Slider</label>
            <input type="file" name="upload" id="exampleInputFile">
            <p class="help-block">ukuran image 156 x 160 pixels</p>
            <p class="help-block">File harus .jpg|png|gif.</p>
          </div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
      <?php echo form_close(); ?>
      
    </div>
  </div>

