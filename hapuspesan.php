<?php
include ('koneksi.php');
	
		$del = "DELETE FROM pesan";
		$delDb = mysql_query($del,$koneksi) or die("Error hapus data ".mysql_error());
		if($delDb){
			echo "<meta http-equiv='refresh' content='0; url=pesan.php'>";
		}
	else{
		echo "<center><div class='alert alert-warning alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Data yang dihapus tidak ada!!</b>
			</div><center>";
	}

?>