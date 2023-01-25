<?php
error_reporting(0);
session_start();
if($_SESSION["emailadmin"]!="" AND $_SESSION["passwordadmin"]!=""){
?>

<!DOCTYPE html>
<!-- saved from url=(0083)http://localhost/aplikasi_kas/admin/index.php?menu=edit_kas_masuk&aksi=edit&nmr=122 -->
<html lang="en" class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths"><!--<![endif]--><!-- BEGIN HEAD--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <title>Edit Admin </title>
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
    background-color: #1d48d2;
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
    background-color: #1d48d2;
    color: #FFFFFF;
}.panel-default > .panel-heading {
    color: #f9f9f9;
    background-color: #1d48d2;
    border-color: #1d48d2;
}.box header {
    background-repeat: repeat-x;
    border-bottom: 1px solid #d4d4d4;
    -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.065);
    box-shadow: 0 1px 4px rgba(0, 0, 0, 0.065);
    background-image: linear-gradient(to bottom, #1d48d2 0%, #fad36c 100%);
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
						<h1>Data Admin</h1>
                    </div>
                </div>
                <hr>
                 <!--BLOCK SECTION -->
                 <div class="row">
                    <div class="col-lg-12">
						<div class="span9">
	<div class="well" style="fixed:center;">
		<b>Edit data Admin</b>
		<p style="margin-top:10px;">
			</p>
			<?php
			include ('koneksi.php');
$kode = $_GET['ia'];
$tampil = "select * from admin where idadmin = '$kode' order by idadmin DESC ";
$query = mysql_query($tampil,$koneksi);
$row = mysql_fetch_array($query);
if($_POST["btn"]){
	if(isset($_POST['edit'])){
			include ('koneksi.php');
$perintah = "update admin set namaadmin='".$_POST["na"]."', alamat='".$_POST["al"]."', email='".$_POST["em"]."', hakakses='".$_POST["ha"]."', foto='".$_FILES["ft"]['name']."' where idadmin='".$_POST["ia"]."'";
$ubah = mysql_query($perintah,$koneksi);
if($ubah){
unlink("fotoadmin/".$row['foto']);
move_uploaded_file( $_FILES["ft"]["tmp_name"],"fotoadmin/".$_POST["ip"].$_FILES["ft"]['name']);
echo("<script>
		

swal('Selamat!', 'Data Admin sukses diubah', 'success');
				
		</script>");
			echo "<center><div class='alert alert-success alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Berhasil mengubah data admin!!</b>
			</div><center>
			
			";
		echo "<meta http-equiv='refresh' content='0; url=admin.php'>";
			
	}else{
echo "<center><div class='alert alert-warning alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Gagal mengubah data admin!!</b>
			</div><center>";
}


			
	}else{
include ('koneksi.php');
$perintah = "update admin set namaadmin='".$_POST["na"]."', alamat='".$_POST["al"]."', email='".$_POST["em"]."', hakakses='".$_POST["ha"]."' where idadmin='".$_POST["ia"]."'";
$ubah = mysql_query($perintah,$koneksi);
if($ubah){
echo("<script>
		

swal('Selamat!', 'Data Admin sukses diubah', 'success');
				
		</script>");
			echo "<center><div class='alert alert-success alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Berhasil mengubah data admin!!</b>
			</div><center>
			
			";
			echo "<meta http-equiv='refresh' content='0; url=admin.php'>";
	}else{
echo "<center><div class='alert alert-warning alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Gagal mengubah data admin!!</b>
			</div><center>";
}	
	}		
	}
?>
		
			
			<form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
			<div class="form-group">
							<label class="control-label col-lg-4">ID Admin</label>
							<div class="col-lg-4">
								<input type="text" name="ia" required="" class="form-control" value="<?php echo $row['idadmin']; ?>" readonly>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Nama Admin</label>
							<div class="col-lg-4">
								<input type="text" name="na" autofocus="" required="" class="form-control" value="<?php echo $row['namaadmin']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Alamat</label>
							<div class="col-lg-4">
								<input type="text" name="al"  required="" class="form-control" value="<?php echo $row['alamat']; ?>">
							</div>
						</div>
                        <div class="form-group">
							<label class="control-label col-lg-4">Email</label>
							<div class="col-lg-4">
								<input type="email" name="em"  required="" class="form-control" value="<?php echo $row['email']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Hak Akses</label>
							<div class="col-lg-4">
								<select name="ha" class="form-control">
                                <?php
		if($row['hakakses']=="Super Admin"){
			$opt1="selected";
		}else{
			$opt1="";
		}
		
		if($row['hakakses']=="Admin"){
			$opt2="selected";
		}else{
			$opt2="";
		}
		?>
								<option value="Super Admin" <?php echo $opt1; ?>>Super Admin</option>
								<option value="Admin" <?php echo $opt2; ?>>Admin</option>
								</select>
							</div>
							</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Ubah foto admin?</label>
							<div class="col-lg-2">
								<input type="checkbox" name="edit" value="true"> Ceklis ubah foto!
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Foto</label>
							<div class="col-lg-2">
								<input type="file" name="ft">
							</div>
						</div>
						
						
						<div class="form-actions no-margin-bottom" style="text-align:center;">
							<input type="submit" name="btn" value="Simpan" class="btn btn-success"> <a href="admin.php" class="btn btn-warning">Kembali</a>
						</div>

					</form>
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