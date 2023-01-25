<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD -->
<head>
     <meta charset="UTF-8" />
    <title>Administrasi Produksi</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
  
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
     <!-- PAGE LEVEL STYLES -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/login.css" />
	<link rel="stylesheet" type="text/css" href="css/sweetalert.css">
	<script type="text/javascript" src="css/sweetalert.min.js.download"></script>
     <!-- END PAGE LEVEL STYLES -->
   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
    .btn-primary {
    color: 0000ff;
    background-color: #1e49d2;
    border-color: #333333;
}
.btn-info {
    color: #ffffff;
    background-color: #1e49d2;
    border-color: #46b8da;
}.btn-danger {
    color: #ffffff;
    background-color: #a91c0b;
    border-color: #d43f3a;
}</style>
</head>
    <!-- END HEAD -->

    <!-- BEGIN BODY -->
<body >
<?php
error_reporting(0);
session_start();
include_once("koneksi.php");

if($_POST["login"]){
include ('koneksi.php');
$em=$_POST["em"];
$ps=md5($_POST["ps"]);
	$tampil = "select * from admin where email='$em' and password='$ps'";
$query = mysql_query($tampil,$koneksi);

if( mysql_num_rows($query)==1)
{
$row = mysql_fetch_array($query);
$_SESSION["emailadmin"]= $row["email"];
$_SESSION["fotoadmin"]= $row["foto"];
$_SESSION["namaadmin"]= $row['namaadmin'];
$_SESSION["alamat"]= $row['alamat'];
$_SESSION["idadmin"]= $row['idadmin'];
$_SESSION["passwordadmin"]= $row['password'];
$_SESSION["hakakses"]= $row['hakakses'];
echo("<script>
    

swal('Selamat!', 'Anda Berhasi login', 'success');
        
    </script>");

echo "<meta http-equiv='refresh' content='0; url=menuadmin.php'>";

} else{
echo("<script>
    

swal('Maaf!', 'Email dan kata sandi yang anda masukan tidak cocok', 'warning');
        
    </script>");


}
}
?>
   <!-- PAGE CONTENT --> 
    <div class="container" >
    <div class="text-center">
       
    </div>
    <div class="tab-content">
        <div id="login" class="tab-pane active">
        <center>
        <img width="20%" src="themes/images/LOGO.png">
        </center>    
            <form action="" method="post" class="form-signin">
                <p class="text-muted text-center btn-block btn btn-success btn-rect">
                    Adm Produksi
                </p>
                <input type="email" autofocus required name="em" placeholder="Masukan email anda" class="form-control" />
                <input type="password" required name="ps" placeholder="Masukan kata sandi" class="form-control" />
				<input type="submit" name="login" value="Masuk" class="btn btn-success"/>
				<input type="reset" name="reset" value="Batal" class="btn btn-danger"/>
            </form>
        </div>
    </div>


</div>

	  <!--END PAGE CONTENT -->     
	      
      <!-- PAGE LEVEL SCRIPTS -->
      <script src="js/jquery-2.0.3.min.js"></script>
      <script src="js/bootstrap.js"></script>
      <!--END PAGE LEVEL SCRIPTS -->

</body>
    <!-- END BODY -->
</html>
