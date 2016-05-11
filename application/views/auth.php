<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap Registration Form Template</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/form-elements.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">

            <div class="inner-bg" style="margin-top: 60px">
                <div class="container">
                    <div class="row">

                        <div class="col-sm-6 form-box">
                          <div class="form-top">
                            <div class="form-top-left">
                              <h3>Sign up now</h3>
                                <p>Fill in the form below to get instant access:</p>
                            </div>
                            <div class="form-top-right">
                              <i class="fa fa-pencil"></i>
                            </div>
                            </div>
                            <div class="form-bottom">
                            <?php $error = $this->session->flashdata("error"); ?>
                              <div class="alert alert-<?php echo $error ? 'warning' : 'info' ?> alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <?php echo $error ? $error : 'Enter your username and password' ?>
                              </div>

                                <?php echo form_open(); ?>
                                    <?php $error = form_error("username", "<p class='text-danger'>", '</p>'); ?>
                                        <div class="form-group <?php echo $error ? 'has-error' : '' ?>">
                                            <label class="sr-only" for="form-email">Username</label>
                                            <input type="text" name="username" placeholder="Username..." class="form-first-name form-control" id="form-email">
                                        </div><?php echo $error; ?>

                                    <?php $error = form_error("password", "<p class='text-danger'>", '</p>'); ?>
                                        <div class="form-group <?php echo $error ? 'has-error' : '' ?>">
                                            <label class="sr-only" for="form-email">Password</label>
                                            <input type="password" name="password" placeholder="Password." class="form-first-name form-control" id="form-email">
                                        </div><?php echo $error; ?>

                                  <button type="submit" class="btn">Sign me up!</button>
                           <?php echo form_close(); ?>

                        </div>
                        </div>
                        <div class="col-sm-6 text" style="float: right;">
                            <h1><strong>OneStopUni</strong> Registration Form</h1>
                            <div class="description">
                              <p>
                                This is a free responsive registration form made with Bootstrap.
                                Download it on <a href="http://azmind.com"><strong>AZMIND</strong></a>, customize and use it as you like!
                              </p>
                            </div>
                            <div class="top-big-link">
                              <a class="btn btn-link-1" href="<?php echo site_url('register') ?>">Register</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <!-- Javascript -->
        <script src="<?php echo base_url(); ?>assets/js/jquery-1.11.1.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.backstretch.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/retina-1.1.0.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>

        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>
