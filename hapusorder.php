<?php
include ('koneksi.php');
if($_GET){
	if($_GET["io"]){
		$del = "DELETE FROM tborder WHERE idorder='".$_GET["io"]."'";
		$delDb = mysql_query($del,$koneksi) or die("Error hapus data ".mysql_error());
		
		if($delDb){
			unlink("fotoorder/".$_GET["ft"]);
			echo "<meta http-equiv='refresh' content='0; url=order.php'>";
		}
		
	}else{
		echo "<center><div class='alert alert-warning alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Data yang dihapus tidak ada!!</b>
			</div><center>";
	}
}
?>