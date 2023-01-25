<?php
error_reporting(0);
session_start();
if($_SESSION["idadmin"]!="" AND $_SESSION["namaadmin"]!=""){
?>

<!DOCTYPE html>
<!-- saved from url=(0061)http://localhost/aplikasi_kas/admin/index.php?menu=tambah_kas -->
<html lang="en" class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths"><!--<![endif]--><!-- BEGIN HEAD--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <title>Input Produk</title>
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
}.btn.btn-primary, .btn.btn-primary:hover, .btn.btn-primary:focus, .btn.btn-primary:active, .btn.btn-primary.active, .btn.btn-primary:active:focus, .btn.btn-primary:active:hover, .btn.btn-primary.active:focus, .btn.btn-primary.active:hover, .open > .btn.btn-primary.dropdown-toggle, .open > .btn.btn-primary.dropdown-toggle:focus, .open > .btn.btn-primary.dropdown-toggle:hover, .navbar .navbar-nav > li > a.btn.btn-primary, .navbar .navbar-nav > li > a.btn.btn-primary:hover, .navbar .navbar-nav > li > a.btn.btn-primary:focus, .navbar .navbar-nav > li > a.btn.btn-primary:active, .navbar .navbar-nav > li > a.btn.btn-primary.active, .navbar .navbar-nav > li > a.btn.btn-primary:active:focus, .navbar .navbar-nav > li > a.btn.btn-primary:active:hover, .navbar .navbar-nav > li > a.btn.btn-primary.active:focus, .navbar .navbar-nav > li > a.btn.btn-primary.active:hover, .open > .navbar .navbar-nav > li > a.btn.btn-primary.dropdown-toggle, .open > .navbar .navbar-nav > li > a.btn.btn-primary.dropdown-toggle:focus, .open > .navbar .navbar-nav > li > a.btn.btn-primary.dropdown-toggle:hover {
    background-color: #538f06;
    color: #FFFFFF;
}.panel-default > .panel-heading {
    color: #f9f9f9;
    background-color: #538f06;
    border-color: #538f06;
}.box header {
    background-repeat: repeat-x;
    border-bottom: 1px solid #d4d4d4;
    -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.065);
    box-shadow: 0 1px 4px rgba(0, 0, 0, 0.065);
    background-image: linear-gradient(to bottom, #538f06 0%, #fad36c 100%);
}

</style>
</head>
<body class="padTop53" style="background:url(themes/images/bg.png)">
	<div id="wrap">
		<!-- HEADER SECTION -->
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
            <div class="inner">
                <div class="row">
                    <div class="col-lg-12">
						<h1>Worksheet Orderan</h1>
                    </div>
                </div>
                <hr>
                 <!--BLOCK SECTION -->
                 <div class="row">
                    <div class="col-lg-12">
						<div class="box">

	<header>
		<h5><font color="white">Masukan Data Orderan Baru</font></h5>
	</header>
		<div class="body">
		<?php 
		include ('koneksi.php');
		session_start();
if($_POST["btn"]){
$ida= $_POST["idadmin"];
$na= $_POST["namaadmin"];
$ip= $_POST["idproduk"];
$np= $_POST["namaproduk"];
$jl= $_POST["jml"];
$to= $_POST["tglorder"];
$tt= $_POST["tgltarget"];
$ket= $_POST["ket"];
$ft= $_FILES["ft"]["name"];
$st="Menunggu konfirmasi produksi";

$perintah = "insert into tborder (idadmin, namaadmin, idproduk, namaproduk, jml, tglorder, tgltarget, ket, foto, status) value ('$ida','$na','$ip','$np','$jl','$to','$tt','$ket','$ft','$st')";

$simpan = mysql_query($perintah,$koneksi);
if($simpan){
move_uploaded_file( $_FILES["ft"]["tmp_name"],"fotoorder/".$ft);
echo("<script>
		

swal('Selamat!', 'Data worksheet orderan terkirim', 'success');
				
		</script>");
			echo "<center><div class='alert alert-success alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Berhasil megirim worksheet!!</b>
			</div><center>
			
			";
			
	}else{
echo "<center><div class='alert alert-warning alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Gagal mengirim worksheet!!</b>
			</div><center>";
}
}
?>
			<form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
			
						<div class="form-group">
							<label class="control-label col-lg-4">Id Admin</label>
							<div class="col-lg-4">
								<input type="text" name="idadmin" readonly class="form-control" value="<?php echo $_SESSION["idadmin"]; ?>">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Nama Admin</label>
							<div class="col-lg-4">
								<input type="text" name="namaadmin" readonly class="form-control" value="<?php echo $_SESSION["namaadmin"]; ?>">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Id Produk</label>
							<div class="col-lg-4">
							<select name="idproduk" id="idproduk" class="form-control">
								<option>- Pilih Produk -</option>
							<?php
                            $tampil = "select * from produk";
							$query = mysql_query($tampil,$koneksi);     
							while ($row = mysql_fetch_array($query)) {
							echo "<option value= '$row[idproduk]'> $row[namaproduk]</option>";   
							}?>  
                            </select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Nama Produk</label>
							<div class="col-lg-4">
								<input type="text" readonly name="namaproduk" id="namaproduk"  class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Jumlah Produk</label>
							<div class="col-lg-4">
								<input type="number"  name="jml" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Tanggal Order</label>
							<div class="col-lg-4">
								<input type="date" name="tglorder" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Tanggal Target</label>
							<div class="col-lg-4">
								<input type="date" name="tgltarget" class="form-control">
							</div>
						</div>
	  					<div class="form-group">
							<label class="control-label col-lg-4">Ket</label>
							<div class="col-lg-4">
								<input type="text" name="ket" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Foto</label>
							<div class="col-lg-2">
								<input type="file" name="ft">
							</div>
						</div>
						
						<div class="form-actions no-margin-bottom" style="text-align:center;">
							<input type="submit" name="btn" value="Simpan" class="btn btn-primary"> <a href="menuadmin.php" class="btn btn-warning">Kembali</a>
						</div>

					</form>
					<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script>
		$(function() {
			$("#idproduk").change(function(){
				var idproduk = $("#idproduk").val();
 
				$.ajax({
					url: 'ajak.php',
					type: 'POST',
					dataType: 'json',
					data: {
						'idproduk': idproduk
					},
					success: function (produk) {
						$("#namaproduk").val(produk['namaproduk']);
 
					
					}
				});
			});
 
			$("form").submit(function(){
				alert("Keep learning");
			});
		});
	</script>
                            
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
		 <?php include ('footer.php'); ?>    <!--END FOOTER -->
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