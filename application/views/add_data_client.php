<div class="content-wrapper">

 	<section class="content-header">
      <h1>
        Please complete the form below
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="#">Forms</a></li>
      </ol>
    </section>


<section class="content">
	<div class="row">

		<div class="col-md-1"></div>
		<div class="col-md-9" style="margin-top: 20px">
			<div class="box box-info">
				<div class="box-header with-border">
				  <h3 class="box-title">Quick Example</h3>
				</div><!-- /.box-header -->
				<?php $msg = $this->session->flashdata("msg"); ?>
                <div class="alert alert-<?php echo $msg ? 'success' : 'info' ?> alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <?php echo $msg ? $msg : 'Lengkapi Data Profil anda...!' ?>
                </div>
  				<!-- form start -->
  				<?php echo form_open('/dashboard/add_data_client_submit'); ?>
                    
                <div class="form-horizontal" style="min-height:540px;">

                  <?php $error = form_error("singkatan", "<p style='margin-left: 130px;' class='text-danger'>", '</p>'); ?>
                      <div class="form-group <?php echo $error ? 'has-error' : '' ?>">
                        <label for="inputName" class="col-sm-2 control-label">Singkatan</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="inputName" name="singkatan" placeholder="Singkatan Universitas">
                        </div>
                      </div><?php echo $error; ?>

                      <?php $error = form_error("alamat", "<p style='margin-left: 130px;' class='text-danger'>", '</p>'); ?>

                      <div class="form-group <?php echo $error ? 'has-error' : '' ?>">
                        <label for="inputSkills" class="col-sm-2 control-label">Alamat</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="inputSkills" name="alamat" placeholder="Alamat">
                        </div>
                      </div><?php echo $error; ?>

                      <?php $error = form_error("web", "<p style='margin-left: 130px;' class='text-danger'>", '</p>'); ?>
                      <div class="form-group <?php echo $error ? 'has-error' : '' ?>">
                        <label for="inputSkills" class="col-sm-2 control-label">Website</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="inputSkills" name="web" placeholder="Website">
                        </div>
                      </div><?php echo $error; ?>



                      <div class="form-group">
                        <label for="inputSkills" class="col-sm-2 control-label">Jenis Universitas</label>
                        <div class="col-sm-8">
                          <select name="jenis_pt" class="form-control select2" style="width: 80%;">
                            <option selected="selected">Swasta</option>
                            <option>Negeri</option>
                          </select>
                        </div>
                      </div><!-- /.form-group -->

                      

                      <div class="form-group">
                        <label for="inputSkills" class="col-sm-2 control-label">Akreditasi</label>
                        <div class="col-sm-8">
                          <select name="akreditasi" class="form-control select2" style="width: 80%;">
                            <option selected="selected">A</option>
                            <option>B</option>
                            <option>C</option>
                            <option>D</option>
                          </select>
                        </div>
                      </div><!-- /.form-group -->

                      <?php $error = form_error("jml_fakultas", "<p style='margin-left: 130px;' class='text-danger'>", '</p>'); ?>
                      <div class="form-group <?php echo $error ? 'has-error' : '' ?>">
                        <label for="inputSkills" class="col-sm-2 control-label">Jumlah Fakultas</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="inputSkills" name="jml_fakultas" placeholder="Jumlah Fakultas">
                        </div>
                      </div><?php echo $error; ?>


                      <?php $error = form_error("jml_prodi", "<p style='margin-left: 130px;' class='text-danger'>", '</p>'); ?>
                      <div class="form-group <?php echo $error ? 'has-error' : '' ?>">
                        <label for="inputSkills" class="col-sm-2 control-label">Jumlah Prodi</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="inputSkills" name="jml_prodi" placeholder="Jumlah Prodi">
                        </div>
                      </div><?php echo $error; ?>

                      <?php $error = form_error("thn_diri", "<p style='margin-left: 130px;' class='text-danger'>", '</p>'); ?>
                      <div class="form-group <?php echo $error ? 'has-error' : '' ?>">
                        <label for="inputSkills" class="col-sm-2 control-label">Tahun Berdiri</label>
                        <div class="col-sm-8">
                          <input type="number" class="form-control" id="inputSkills" name="thn_diri" placeholder="Tahun Berdiri">
                        </div>
                      </div><?php echo $error; ?>

                      <?php $error = form_error("bio", "<p style='margin-left: 130px;' class='text-danger'>", '</p>'); ?>
                      <div class="form-group <?php echo $error ? 'has-error' : '' ?>">
                        <label for="inputExperience" class="col-sm-2 control-label">BIO</label>
                        <div class="col-sm-8">
                          <textarea class="form-control" id="inputExperience" name="bio" placeholder="BIO"></textarea>
                        </div>
                      </div><?php echo $error; ?>

                      <input type="text" value="<?php echo $id; ?>" name="id" style="display: none;">

                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-8">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                            </label>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button style=" margin-bottom: 20px;" type="submit" class="btn btn-danger">Submit</button>
                        </div>
                      </div>
                    </div>
                    <?php echo form_close(); ?>
			</div><!-- /.box -->
		</div>
	</div>
</section>
</div>
