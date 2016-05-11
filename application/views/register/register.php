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

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
<!--         <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png"> -->

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7 text">
                            <h1><strong>OneStopUni</strong> Registration Form</h1>
                            <div class="description">
                            	<p>
	                            	This is a free responsive registration form made with Bootstrap. 
	                            	Download it on <a href="http://azmind.com"><strong>AZMIND</strong></a>, customize and use it as you like!
                            	</p>
                            </div>
                            <div class="top-big-link">
                            	<a class="btn btn-link-1" href="<?php echo site_url('auth') ?>">Login</a>
                            </div>
                        </div>
                        <div class="col-sm-5 form-box">
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
                            <?php $msg = $this->session->flashdata("msg"); ?>
                            <div class="alert alert-<?php echo $msg ? 'success' : 'info' ?> alert-dismissible" role="alert">
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <?php echo $msg ? $msg : 'Enter your username, email and password' ?>
                            </div>
                                <?php echo form_open('register/add_client'); ?>
                                    <?php $error = form_error("username", "<p class='text-danger'>", '</p>'); ?>    
                                        <div class="form-group">
                                            <label class="sr-only" for="form-first-name">Username</label>
                                            <input type="text" name="username" placeholder="username" class="form-first-name form-control" id="form-first-name">
                                        </div><?php echo $error; ?>     
                                                                    
                                    <?php $error = form_error("email", "<p class='text-danger'>", '</p>'); ?>    
                                        <div class="form-group">
                                            <label class="sr-only" for="form-email">Email</label>
                                            <input type="email" name="email" placeholder="Email..." class="form-first-name form-control" id="form-email">
                                        </div><?php echo $error; ?>

                                    <?php $error = form_error("password", "<p class='text-danger'>", '</p>'); ?>    
                                        <div class="form-group">
                                            <label class="sr-only" for="form-email">Password</label>
                                            <input type="password" name="password" placeholder="Password." class="form-first-name form-control" id="form-email">
                                        </div><?php echo $error; ?>

                                    <?php $error = form_error("repassword", "<p class='text-danger'>", '</p>'); ?>    
                                        <div class="form-group">
    			                        	<label class="sr-only" for="form-email">Konfirmasi Password</label>
    			                        	<input type="password" name="repassword" placeholder="Konfirmasi Password" class="form-first-name form-control" id="form-email">
    			                        </div><?php echo $error; ?>
    			                        
    			                        <button type="submit" class="btn">Sign me up!</button>
    			                 <?php echo form_close(); ?>
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

