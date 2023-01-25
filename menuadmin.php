<?php
error_reporting(0);
session_start();
if($_SESSION["emailadmin"]!="" AND $_SESSION["passwordadmin"]!=""){
?>

<!DOCTYPE html>
<!-- saved from url=(0045)http://localhost/aplikasi_kas/admin/index.php -->
<html lang="en" class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths"><!--<![endif]--><!-- BEGIN HEAD--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <title>Toko Baju Muslim | AR. Hidayat Putra Collection</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="description">
	<meta content="" name="author">
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
    <!-- GLOBAL STYLES -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/theme.css">
    <link rel="stylesheet" href="css/MoneAdmin.css">
    <link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/datepicker.css">
	<link rel="stylesheet" type="text/css" href="css/sweetalert.css">
	<link href="themes/css/bootstrappage.css" rel="stylesheet"/>
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/material-kit.css" rel="stylesheet"/>

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="assets/css/demo.css" rel="stylesheet" />	
		<!-- global styles -->
		<link href="themes/css/flexslider.css" rel="stylesheet"/>
		<link href="themes/css/main.css" rel="stylesheet"/>

		<!-- scripts -->
		<script src="themes/js/jquery-1.7.2.min.js"></script>
		<script src="themes/js/superfish.js"></script>	
		<script src="themes/js/jquery.scrolltotop.js"></script>
	
	<script type="text/javascript" src="css/sweetalert.min.js.download"></script>
    <!--END GLOBAL STYLES -->
    <style type="text/css">
.nav-pills.nav-pills-danger > li.active > a, .nav-pills.nav-pills-danger > li.active > a:focus, .nav-pills.nav-pills-danger > li.active > a:hover {
    background-color: #538f06;
    box-shadow: 0 16px 26px -10px rgba(255, 255, 255, 0.56), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(244, 67, 54, 0.2);
}
#top .navbar {
    margin-bottom: 0;
    border: 1px solid #369;
    background-color: #ffffff;
}

#footer {
    margin: 0 auto;
    color: #eeeeee;
    background-color: #ffffff;
    border: 1px solid rgb(216, 215, 215);
}
#wrap {
    background-color: #ffffff;
}
.btn.btn-primary, .btn.btn-primary:hover, .btn.btn-primary:focus, .btn.btn-primary:active, .btn.btn-primary.active, .btn.btn-primary:active:focus, .btn.btn-primary:active:hover, .btn.btn-primary.active:focus, .btn.btn-primary.active:hover, .open > .btn.btn-primary.dropdown-toggle, .open > .btn.btn-primary.dropdown-toggle:focus, .open > .btn.btn-primary.dropdown-toggle:hover, .navbar .navbar-nav > li > a.btn.btn-primary, .navbar .navbar-nav > li > a.btn.btn-primary:hover, .navbar .navbar-nav > li > a.btn.btn-primary:focus, .navbar .navbar-nav > li > a.btn.btn-primary:active, .navbar .navbar-nav > li > a.btn.btn-primary.active, .navbar .navbar-nav > li > a.btn.btn-primary:active:focus, .navbar .navbar-nav > li > a.btn.btn-primary:active:hover, .navbar .navbar-nav > li > a.btn.btn-primary.active:focus, .navbar .navbar-nav > li > a.btn.btn-primary.active:hover, .open > .navbar .navbar-nav > li > a.btn.btn-primary.dropdown-toggle, .open > .navbar .navbar-nav > li > a.btn.btn-primary.dropdown-toggle:focus, .open > .navbar .navbar-nav > li > a.btn.btn-primary.dropdown-toggle:hover {
    background-color: #2a3489;
    color: #FFFFFF;
}#menu {
    position: relative;
    overflow: hidden;
    /* background-color: #333; */
    border-right: 1px solid rgb(216, 215, 215);
    border-left: 1px solid rgb(216, 215, 215);
    background-color: #ffffff;
    border-bottom: 1px solid rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.05);
    box-shadow: 0 1px 0 rgba(255, 255, 255, 0.05);
}

</style>
</head>
<body class="padTop53">
	<div id="wrap">
		<!-- HEADER SECTION -->
		 <div id="top">
		 <?php include ('navbar.php'); ?>	
		</div>        <!-- END HEADER SECTION -->
		
		 <!-- MENU SECTION -->
		        <div id="left">
            <?php include ('daftarmenu.php'); ?>
        </div>
		
		
		<div id="content">
            <div class="inner" >
                
                <hr>
                 <!--BLOCK SECTION -->
                 <div class="row">
                    <div class="col-lg-12">
						<div class="col-lg-12">
										<div class="panel panel-default">
											<div class="panel-heading">
												Menu Admin
											</div>
											<div class="panel-body">
												<ul class="nav nav-tabs" style="background:#538f06;">
													<li class="active"><a href="http://localhost/aplikasi_kas/admin/index.php#home" data-toggle="tab">Beranda</a>
													</li>
													
												</ul>

												<div class="tab-content">
													<div class="tab-pane fade in active" id="home">
													
												<ul class="nav nav-pills nav-pills-danger" role="tablist">
	
	
	<li class="active">
		<?php
						include ('koneksi.php');
						$st2 = "Menunggu konfirmasi produksi";
						$tp3 = "select * from tborder where status LIKE '%$st2%'";
						$qu3 = mysql_query($tp3,$koneksi);
                        $order2 = mysql_num_rows($qu3)
		 ?>
		<a href="order.php?cari=Menunggu">
			<i class="material-icons"><?php echo $order2; ?></i>
			Menunggu konfirmasi produksi
		</a>
	</li>
	<li class="active">
		<?php
						include ('koneksi.php');
						$st3 = "Sudah diproduksi";
						$tp4 = "select * from tborder where status LIKE '%$st3%'";
						$qu4 = mysql_query($tp4,$koneksi);
                        $order3 = mysql_num_rows($qu4)
		 ?>
		<a href="order.php?cari=Sudah">
			<i class="material-icons"><?php echo $order3; ?></i>
			Sudah diproduksi
		</a>
	</li>
	
</ul>
						


													</div>
													
												</div>
											</div>
										</div>
										<br/>

										<div class="panel panel-default">
											<div class="panel-heading">
												Pesan Keterangan
											</div>
											<div class="panel-body">
												<ul class="nav nav-tabs" style="background:#538f06;">
													<li class="active"><a href="http://localhost/aplikasi_kas/admin/index.php#home" data-toggle="tab">Pesan</a>
													</li>
													
												</ul>

												<div class="tab-content">
													<div class="tab-pane fade in active" id="home">
													
												<ul class="nav nav-pills nav-pills-danger" role="tablist">

	<li class="active">
		<?php
						include ('koneksi.php');
						$tp = "select * from pesan";
						$qu = mysql_query($tp,$koneksi);
                        $pesan = mysql_num_rows($qu)
		 ?>
		<a href="pesan.php">
			<i class="material-icons"><?php echo $pesan; ?></i>
			Pesan Masuk
		</a>
	</li>
</ul>
						


													</div>
													
												</div>
											</div>
										</div>
									</div>					</div>
                </div>
                  <!--END BLOCK SECTION -->
                <hr>
            </div>
        </div>        <!--END MENU SECTION -->
		<!--PAGE CONTENT -->
       <!--END PAGE CONTENT -->
	</div>
	<!-- FOOTER -->
		 <div id="footer">
        <p><font color="black">Copyright <?php echo date(Y); ?> PKL PERCETAKAN CAMPERNIK.</font></p>
</div>    <!--END FOOTER -->
     <!-- GLOBAL SCRIPTS -->
    <script src="css/jquery-2.0.3.min.js.download"></script>
	<script src="css/bootstrap-datepicker.js.download"></script>
    <script src="css/bootstrap.min.js.download"></script>
    <script src="css/modernizr-2.6.2-respond-1.1.0.min.js.download"></script>
    <!-- END GLOBAL SCRIPTS -->


</body></html>
<?php
}else{
	header("Location:index.php");
}
?>