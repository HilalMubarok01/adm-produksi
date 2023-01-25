<?php
error_reporting(0);
session_start();
if($_SESSION["emailadmin"]!="" AND $_SESSION["passwordadmin"]!=""){
?>

<head>	
<style type="text/css">
	
	#menu > li.active > a {
    color: #ffffff;
    background-color: #538f06;
}
</style>

</head>
<ul id="menu" class="collapse">
<br />
<br>

				<center>
						    <li>
                            <?php
							error_reporting(0);
							session_start();

							if($_SESSION["fotoadmin"] !=""){
                            echo '<img height="100px" src="fotoadmin/'.$_SESSION["fotoadmin"].'" width="100px"><br><label style="color:#538f06; font-size:18px;">'.$_SESSION["namaadmin"].'</label>';}else{echo '<img height="100px" src="fotoadmin/default.png" width="100px"><br><label style="color:#538f06; font-size:18px;">'.$_SESSION["namaadmin"].'</label>';}
							?>
                            </li>
							
				</center>
				<br />
                <li class="panel active"><a href="menuadmin.php">Beranda</a></li>
                <?php if($_SESSION["hakakses"]=="Super Admin"){ ?>
                <li class="panel active"><a href="admin.php">Admin</a></li>
				<?php } ?>
				
				<li class="panel active"><a href="produk.php">Produk</a></li>
                <?php if($_SESSION["hakakses"]=="Admin"){ ?>
				<li class="panel active"><a href="orderan.php">Worksheet Orderan</a></li>
				<?php } ?>
                <li class="panel active"><a href="order.php">Data Order</a></li>
				<li class="panel active"><a href="editpassword.php?em=<?php echo $_SESSION["emailadmin"]; ?>">Edit Kata Sandi</a></li>
				<li class="panel active"><a onclick="return confirm('ANDA YAKIN INGIN KELUAR ... ?')" href="keluar.php">Keluar</a></li>           
</ul>

<?php
}else{
	header("Location:index.php");
}
?>