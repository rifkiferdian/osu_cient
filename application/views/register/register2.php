
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
    <link href="<?php echo base_url(); ?>assets/css/delay.css" rel="stylesheet">

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
                <p><b>AKUN</u></b></p>
                <span><i>Informasi dasar</i></span>     
              </div>
            </div>            
            <div class="btn btn-info">
              <div class="num">
                <h2>2</h2>
              </div>
              <div class="desc">
                <p><b>INSTITUSI</u></b></p>
                <span><i>Informasi Institusi</i></span>     
              </div>
            </div>  
            <div class="btn btn-info">
              <div class="num">
                <h2>3</h2>
              </div>
              <div class="desc">
                <p><b>SELESAI</u></b></p>
                <span><i>Selesaikan Pendaftaran</i></span>     
              </div>
            </div>                         
            <div class="btn btn-info" style="display: none;"></div>
        </div>
      
        <div class="form-title">
          <p>FORM PENDAFTARAN</p>
        </div>
        
        <div class="form-box">
          <fieldset>
            <form id="reg" method="post" class="form-signin" action="<?php echo base_url(); ?>index.php/register/add_client">  

              <label for="inputUser">Username</label>
              <input placeholder="username" name="username" type="text" id="username" class="form-control" required data-toggle="tooltip" data-placement="right" title="Masukkan Username.">

              <label for="inputEmail">Email</label>
              <input placeholder="humas@uii.ac.id" name="email" type="email" id="email" class="form-control" required
               data-toggle="tooltip" data-placement="right" title="Masukkan Email.">

              <label for="inputPassword">Password</label>
              <input name="password" type="password" id="password" class="form-control" required
               data-toggle="tooltip" data-placement="right" title="Masukkan Password.">

              <label for="inputKonfirmasi">Konfirmasi Password</label>
              <input name="repassword" type="password" id="repassword" class="form-control" required
              data-toggle="tooltip" data-placement="right" title="Konfirmasi Password.">  

            </form>
            <hr>
            <input type="button" id="ss" name="next" class=" btn btn-success lanjut" value="Selanjutnya" /> 
          </fieldset>
          <fieldset>
            <form id="reg2" method="post" class="form-signin" action="<?php echo base_url(); ?>index.php/register/add_client">  

              <label for="inputPerguruan">Nama Perguruan Tinggi</label>
              <input placeholder="Universitas Indonesia" id="uni" name="uni" type="text" id="inputPerguruan" class="form-control" required
               data-toggle="tooltip" data-placement="right" title="Masukkan Nama Perguruan Tinggi.">

              <label for="inputKota">Kota</label>
              <input placeholder="Jakarta" id="kota" name="kota" type="text" id="inputKota" class="form-control" required
               data-toggle="tooltip" data-placement="right" title="Masukkan Kota.">  

              <label for="inputKota">Provinsi</label>
              <input class="form-control" id="fa" data-toggle="modal" data-target="#faku" type="text" class="btn" title="qweasd" id="fa" placeholder="0 selected">

              <!-- <label for="inputProvinsi">Provinsi</label>
              <input placeholder="Jakarta" id="provinsi" name="provinsi" type="text" id="inputProvinsi" class="form-control" required
               data-toggle="tooltip" data-placement="right" title="Masukkan Provinsi.">  -->

            </form>
            <hr>
            <input type="button" name="previous" class="previous btn btn-primary" value="Sebelumnya" />
            <input type="button" id="ss2" name="next" class="btn btn-success lanjut" value="Selanjutnya" />         
          </fieldset>   
          <fieldset>
            <div class="form-signin">
              <h3>Anda yakin telah mengisi formulir dengan benar? </h3>
            </div>
            <input type="submit" name="submit" class="submit btn btn-lg btn-success center" onclick="add()" value="Submit" />          
            <input type="button" name="previous" class="previous btn btn-lg btn-primary center" value="Tinjau ulang kembali">         
          </fieldset>        
        </div>
    </div>   

    </div> <!-- /container -->

<div class="modal2"></div>

    <!-- Modal -->
  <div class="modal fade" id="faku" role="dialog">
    <div class="modal-dialog modal-lg">
    
           <!-- Modal content-->
              <div class="modal-content" style="color:#6e6e6e;">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Select Lokasi</h4>
                </div>
                  <div class="modal-body" style="height: 340px;">
                  <?php 
                    foreach ($data_provinsi as $key => $value) {  
                  ?>
                <div style="float:left; width:28%; margin-right: 3%;"> 
                    <label>
                      <input name="prov" id="prov" type="radio" value="<?php echo $value['nama_provinsi']; ?>">
                      <?php echo $value['nama_provinsi']; ?>
                    </label>
                </div>                       

                <?php } ?>
                  </div>
                <div class="modal-footer">
                  <button type="button" id="asd" class="btn btn-default" data-dismiss="modal">Select</button>
                </div>
              </div><!-- END Modal content-->
            </div>
          </div><!-- END Modal -->

      
    </div>
  </div>

    <script src="<?php echo base_url(); ?>assets/js/jquery-1.11.1.min.js"></script>
    <script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>  
    <script src="<?php echo base_url(); ?>assets/js/register.js"></script>     
    <script src="<?php echo base_url(); ?>assets/js/delay.js"></script>     
    <script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();   
    });

    function add(){
      var username = $('#username').val();
      var email = $('#email').val();
      var password = $('#password').val();
      var uni = $('#uni').val();
      var kota = $('#kota').val();
      var provinsi = $("input[name='prov']:checked").val();

      var url = "<?php echo site_url('register/add_client')?>";
      var data = "username="+username+"&email="+email+"&password="+password+"&uni="+uni+"&kota="+kota+"&provinsi="+provinsi;
      var datas = $("#reg, #reg2").serialize();
      $.ajax({
        url : url,
        type : "POST",
        data : data,
        dataType : "JSON",

        success: function(data){
          console.log(data);
          // chek username jika ada ngk lanjut, jika not ada lanjut
          if( data.status == true ) {
              alert("Username alredy exist...");
          } else {
              $.get("/mockjax");
              // alert("Data Sudah Tersimpan...");
              setTimeout(function() { alert("Data Sudah Tersimpan..."); }, 4000);
              window.location.href = "<?php echo site_url('register/info_konfirmasi')?>";  
          }

        },
        error: function(jqXHR, textStatus, errorThrown) {
          console.log(textStatus, errorThrown);
        }
      });
    }
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#asd').click(function(){
                  var radioValue = $("input[name='prov']:checked").val();
                  $('#fa').attr("placeholder", radioValue);
            });
        });
    </script>

  </body>
</html>
