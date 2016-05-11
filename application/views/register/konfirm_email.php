
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="icon" href="../../favicon.ico"> -->
    <title>Registration Form</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700,400italic' rel='stylesheet' type='text/css'>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assets/css/register.css" rel="stylesheet">

  </head>

  <body>

    <div class="container">


    <div class="row box">
        <h2 class="form-signin-heading">Pendaftaran</h2>
        <div class="btn-group btn-breadcrumb" id="progressbar">
            <div class="btn btn-info active">
              <div class="num">
                <h2>1</h2>
              </div>
              <div class="desc">
                <p><b>REGISTER</u></b></p>
                <span><i>Informasi dasar</i></span>     
              </div>
            </div>            
            <div class="btn btn-info active">
              <div class="num">
                <h2>2</h2>
              </div>
              <div class="desc">
                <p><b>KONFIRM</u></b></p>
                <span><i>Konfirm Email</i></span>     
              </div>
            </div>  
            <div class="btn btn-info ">
              <div class="num">
                <h2>3</h2>
              </div>
              <div class="desc">
                <p><b>ACCESS</u></b></p>
                <span><i>Access Login Page</i></span>     
              </div>
            </div>                         
        </div>
      
        <div class="form-title">
          <p>PENDAFTARAN</p>
        </div>
        
        <div class="form-box"> 
          <fieldset>
            <div class="form-signin">
              <h3>Konfirmasi ..!</h3>
            </div>
            <!-- <input type="submit" name="submit" class="submit btn btn-lg btn-success center" value="Submit" />     -->
            <a href="<?php echo site_url('register/konfirm_email/').'/'.$key; ?>" class="btn btn-success btn-lg center" style="width: 150px;">Submit</a>      
          </fieldset>        
        </div>
    </div>   

  </div>

    <script src="<?php echo base_url(); ?>assets/js/jquery-1.11.1.min.js"></script>
    <script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>  
    <script src="<?php echo base_url(); ?>assets/js/register.js"></script>     

  </body>
</html>
