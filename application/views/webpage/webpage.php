<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<title>Welcome</title>
	
	<!-- Main CSS file -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/web_page/css/bootstrap.min.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/web_page/css/owl.carousel.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/web_page/css/magnific-popup.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/web_page/css/font-awesome.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/web_page/css/style.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/web_page/css/responsive.css" />

	
	<!-- Favicon -->
	<link rel="shortcut icon" href="images/icon/favicon.png">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>assets/web_page/images/icon/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>assets/web_page/images/icon/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>assets/web_page/images/icon/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>assets/web_page/images/icon/apple-touch-icon-57-precomposed.png">
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	
</head>
<body>

<?php 

if (count($data_header) > 0) {
	foreach ($data_header as $key => $value) { $img2 = $value['logo'];}
}else{
	$img2 = "header.png";
}

?>

<div class="container-field">
<div class="row" style="margin-right: 0; margin-left: 0;">

	<!-- PRELOADER -->
	<div id="st-preloader">
		<div id="pre-status">
			<div class="preload-placeholder"></div>
		</div>
	</div>
	<!-- /PRELOADER -->
	
	<!-- HEADER -->
	<header id="header">
		<div style="min-height: 43px; background-color: #22A7F0; font-size: 12px; color: #fff">
			<div class="head-info">
				<div class="col-md-8 col-sm-6">
					<div class="header-info">
						<strong><?php foreach ($data_header as $key => $value) { echo $value['informasi']; }?></strong><span class="sep"> | </span><a href="http://<?php foreach ($data_user as $key => $value) { echo $value['website']; }?>"><?php foreach ($data_user as $key => $value) { echo $value['website']; }?></a>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<ul class="social">
					<?php 
                    	foreach ($data_sosmed as $key => $value) {                  	
					 ?>
						<li>
							<a target="_blank" href="<?php echo $value['youtube']; ?>"><i class="fa fa-youtube" aria-hidden="true"></i></a>
						</li>
						<li>
							<a target="_blank" href="<?php echo $value['google_plus']; ?>"><i class="fa  fa-google-plus" aria-hidden="true"></i></a>	
						</li>
						<li>
							<a target="_blank" href="<?php echo $value['twitter']; ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
						</li>
						<li>
							<a target="_blank" href="<?php echo $value['facebook']; ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>	
						</li>
					<?php } ?>
					</ul>			
				</div>
			</div>
		</div>
		<!-- Header logo -->
			<div class="header-logo">
				<div class="logo">
					<a href="#">
						<img src="<?php echo base_url(); ?>assets/web_page/images/logo/<?php echo $img2; ?>" alt="Penerimaan Mahasiswa Baru UII" class="normal-logo">
					</a>
				</div>
			</div>

		<!-- Navigation -->
		<nav class="navbar st-navbar">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#st-navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
				    	<span class="icon-bar"></span>
				    	<span class="icon-bar"></span>
				    	<span class="icon-bar"></span>
					</button>
				</div>

				<div class="collapse navbar-collapse" id="st-navbar-collapse" style="margin: 0 auto; max-width: 670px; ">
					<div>
						<ul class="nav navbar-nav">
					    	<li><a href="#header">Profil</a></li>
					    	<li><a href="#services">Beasiswa</a></li>
					    	<li><a href="#our-works">Lokasi</a></li>
					    	<li><a href="#pricing">Informasi</a></li>
					    	<li><a href="#our-team">Kontak</a></li>
					    	<li><a href="#contact">Buku Panduan</a></li>
						</ul>
					</div>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container -->
		</nav>
		
	</header>
	<!-- /HEADER -->

	<!-- SLIDER -->
	<section id="slider">
		<div id="home-carousel" class="carousel slide" data-ride="carousel">			
			<div class="carousel-inner">				
				
			<?php foreach ($data_slider2 as $key => $value) { 
				if ($key == 0) { $ac = 'active';  } else { 	$ac = '';   }  
			?>

				<div class="item <?php echo $ac; ?>" style="background-image: url(<?php echo base_url(); ?>assets/web_page/images/slider/<?= $value['image'] ?>)">
					<div class="carousel-caption container">
						<div class="row">
							<div class="col-sm-7">
								<h1><?= $value['text_atas'] ?></h1>
								<h2><?= $value['text_tengah'] ?></h2>
								<p><?= $value['text_bawah'] ?></p>
							</div>
						</div>
					</div>					
				</div>
				<?php } ?>

				<a class="home-carousel-left" href="#home-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
				<a class="home-carousel-right" href="#home-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
			</div>		
		</div> <!--/#home-carousel--> 
    </section>
	<!-- /SLIDER -->
	
	<!-- OUR TEAM -->
	<section id="our-team">
		<div class="container">
			<div class="row">

			<?php 
				foreach ($data_content as $key => $value) { 										
			?>
				<div class="col-md-12">
					<div class="section-title" style="text-align: center">
						<img class="alignnone size-full wp-image-639" style="line-height: 1.5em;" alt="Sub Header PMB UII" src="<?php echo base_url(); ?>assets/web_page/images/zxc.png" width="418" height="90">
						<!-- <p>Selamat datang di laman web PMB UII</p> -->
						<span class="st-border" style="margin: 0 auto;"></span>
					</div>
					<div style="text-align: center; margin: 0 auto;">
						<p><?= $value['content'] ?></p>
					</div>
				</div>

				<div class="col-md-12 col-sm-12">
					<div class="team-member">
						<div class="member-image">
							<img class="img-responsive" style=" height: 285px;  width: 100%;" src="<?php echo base_url(); ?>assets/web_page/images/content/<?= $value['image'] ?>" alt="">
							<div class="member-social">
								<a href=""><i class="fa fa-link"></i></a>
							</div>
						</div>
						<div class="member-info">
							<h4><?= $value['title_caption'] ?></h4>
							<span><?= $value['caption'] ?></span>
						</div>
					</div>
				</div>
				<?php } ?>

			</div>
		</div>
	</section>
	<!-- /OUR TEAM -->


	<!-- ABOUT US -->
	<section id="about-us">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12 col-md-6">
					<div class="about-us">
						<div class="section-title" style="text-align: center">
							<h3>Pelayanan Informasi &amp; Pendaftaran PMB UII</h3>
							<span class="st-border" style="margin: 0 auto;"></span>
						</div>					
						<h4><i class="fa fa-hand-o-right"></i> PELAYANAN INFORMASI PMB UII</h4>
						<p>Pelayanan informasi PMB UII dilayani pada hari Senin s/d Sabtu pada jam kerja (kecuali hari libur) di Gedung Muh. Adnan (Kampus D3 Ekonomi), Lantai 1, Kampus Terpadu Universitas Islam Indonesia, Jl. Kaliurang, km. 14,5 Yogyakarta. <br><br><br></p>

						<h4><i class="fa fa-thumbs-o-up"></i> PELAYANAN PENDAFTARAN CBT <br>
						&nbsp; &nbsp; DI KAMPUS UII</h4>
						<p>Pelayanan pendaftaran Computer Based Test (CBT) di Kampus UII dilayani pada hari Senin s/d Sabtu pukul 08.00 – 14.00 WIB (kecuali hari libur) di Gedung Muh. Adnan (Kampus D3 Ekonomi), Lantai 1, Kampus Terpadu Universitas Islam Indonesia, Jl. Kaliurang, km. 14,5 Yogyakarta. CBT di Kampus UII dibuka hingga tanggal 30 Juli 2016.</p>
					</div>					
				</div>
				<div class="col-sm-12 col-md-6">
					<div class="about-us text-center">
						<div class="section-title" style="text-align: center">
							<h3>Pengumuman <br> Hasil Seleksi</h3>
							<span class="st-border" style="margin: 0 auto;"></span>
						</div>					
						<p>Pengumuman Lolos Seleksi pada pola seleksi Penelusuran Siswa Berprestasi (PSB) Periode 3 dapat dilihat melalui tautan di bawah ini mulai tanggal 23 Maret 2016.</p>

						<a href="" class="btn btn-send">Lihar Pengumuman <br> Hasil Seleksi</a>	
					</div>
									
				</div>
			</div>
		</div>
	</section>
	<!-- /ABOUT US -->
	
	<!-- FOOTER -->
	<div class="widget">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-4">		
					<h2>PMB UII ON TWITTER</h2>			
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
				<div class="col-sm-12 col-md-4">	
					<h2>PMB UII ON FACEBOOK</h2>	
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
				<div class="col-sm-12 col-md-4">	
					<h2>SEKRETARIAT PANITIA PENERIMAAN MAHASISWA BARU (PPMB)</h2>					
					<p> Gedung Muhammad Adnan (D3 Ekonomi – Lt.1)
						Kampus Terpadu Universitas Islam Indonesia
						Jl. Kaliurang km. 14,5 Sleman, Yogyakarta 55584
						Telepon: 0274-898444 ext. 1234 dan 1200
						E-mail: pmb@uii.ac.id , Faks: 0274-898 459
						Website: pmb.uii.ac.id.
					</p>
				</div>					
			</div>
		</div>
	</div>

	<footer id="footer">
		<div class="container">
			<div class="row">
				<!-- SOCIAL ICONS -->
				<div class="col-sm-6 col-sm-push-6 footer-social-icons">					
					<a href=""><i class="fa fa-youtube"></i></a>
					<a href=""><i class="fa fa-twitter"></i></a>
					<a href=""><i class="fa fa-facebook"></i></a>
				</div>
				<!-- /SOCIAL ICONS -->
				<div class="col-sm-6 col-sm-pull-6 copyright">
					<p>&copy; 2016 | Panitia Penerimaan Mahasiswa Baru (PPMB) UII | <a href="">ShapedTheme</a></p>
				</div>
			</div>
		</div>
	</footer>
	<!-- /FOOTER -->


	<!-- Scroll-up -->
	<div class="scroll-up">
		<ul><li><a href="#header"><i class="fa fa-angle-up"></i></a></li></ul>
	</div>

	</div>
	</div>
	<!-- JS -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/web_page/js/jquery.min.js"></script><!-- jQuery -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/web_page/js/bootstrap.min.js"></script><!-- Bootstrap -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/web_page/js/jquery.parallax.js"></script><!-- Parallax -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/web_page/js/smoothscroll.js"></script><!-- Smooth Scroll -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/web_page/js/masonry.pkgd.min.js"></script><!-- masonry -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/web_page/js/jquery.fitvids.js"></script><!-- fitvids -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/web_page/js/owl.carousel.min.js"></script><!-- Owl-Carousel -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/web_page/js/jquery.counterup.min.js"></script><!-- CounterUp -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/web_page/js/waypoints.min.js"></script><!-- CounterUp -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/web_page/js/jquery.isotope.min.js"></script><!-- isotope -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/web_page/js/jquery.magnific-popup.min.js"></script><!-- magnific-popup -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/web_page/js/scripts.js"></script><!-- Scripts -->


</body>
</html>