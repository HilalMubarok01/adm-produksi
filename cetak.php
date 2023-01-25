<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/theme.css">
    <link rel="stylesheet" href="css/MoneAdmin.css">
</head>
<body onLoad="javascript:print()" >
<img height="20%" width="100%" src="../themes/images/headercetak.jpg">
<?php
error_reporting(0);
 if($_POST['pelanggan']){ ?>
<center><h2>Laporan Data Pelanggan</h2></center>	
<br>

			<table class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
					<th>No</th>
						<th>ID Pelanggan</th>
						<th>Nama Pelanggan</th>
						<th>Email</th>
						<th>Nomor Telpon</th>
					</tr>
				</thead>
				<?php 
				include ('koneksi.php');
if($_POST['ip']=="semua"){
$tampil = "select * from pelanggan order by idpelanggan DESC";
$query = mysql_query($tampil,$koneksi);
}else{
$tampil = "select * from pelanggan where idpelanggan='".$_POST['ip']."'";
$query = mysql_query($tampil,$koneksi);


}
?>
							<tbody>
					<tr>
					<?php
					$nomor  = 0; 
				while ($row = mysql_fetch_array($query)) {
				$nomor++;
					 ?>
						<td><?php echo $nomor; ?></td>
						<td><?php echo $row['idpelanggan']; ?></td>
						<td><?php echo $row['namapelanggan']; ?></td>
						<td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['nohp']; ?></td>
						
					</tr>
					<?php } ?>
				</tbody>
				</table>
                <?php }
		elseif($_POST['produk']){		
				
				?>

<center><h2>Laporan Data Produk</h2></center>
<br>
<table class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
					<th>No</th>
						<th>ID Produk</th>
						<th>Nama Produk</th>
						<th>Warna</th>
						<th>Ukuran</th>
                        <th>Stok</th>
                        <th>Harga Satuan</th>
                        <th>Kategori</th>
                        <th>Foto</th>
						
					</tr>
				</thead>
				<?php 
				include ('koneksi.php');

if($_POST['ipro']=="semua"){
$tampil = "select * from produk order by idproduk DESC ";
$query = mysql_query($tampil,$koneksi);
}else{
	$tampil = "select * from produk where idproduk='".$_POST['ipro']."'";
$query = mysql_query($tampil,$koneksi);
}
?>
							<tbody>
					<tr>
					<?php
					$nomor  = 0; 
				while ($row = mysql_fetch_array($query)) {
				$nomor++;
					 ?>
						<td><?php echo $nomor; ?></td>
						<td><?php echo $row['idproduk']; ?></td>
						<td><?php echo $row['namaproduk']; ?></td>
						<td><?php echo $row['warna']; ?></td>
                        <td><?php echo $row['ukuran']; ?></td>
                        <td><?php echo $row['stok']; ?></td>
                        <td>Rp. <?php echo number_format($row['hargasatuan']); ?></td>
                        <td><?php echo $row['namakategori']; ?></td>
						<td><a href="fotoproduk/<?php echo $row['foto']; ?>" target="_blank"><img width="50px" height="50px" src="fotoproduk/<?php echo $row['foto']; ?>"></a></td>
						
					</tr>
					<?php } ?>
			</tbody></table>

 <?php }
		elseif($_POST['order']){		
				
				?>



	<center><h2>Laporan Data Order</h2></center>
<br>

                        <?php	include ('koneksi.php');
                        if($_POST['awal']=="semua"){
				$tampil = "select * from tborder";
$query = mysql_query($tampil,$koneksi);
}else{
$tampil = "SELECT * FROM tborder WHERE tglorder BETWEEN '".$_POST['awal']."' AND '".$_POST['akhir']."'  ";
$query = mysql_query($tampil,$koneksi);

}
while ($row = mysql_fetch_array($query)) {
				 ?>

<hr>
<table width="100%">
  <tr>
    <td>ID Order : <?php echo $row['idorder']; ?></td>
    <td>Tanggal Order : <?php echo $row['tglorder']; ?></td>
    <td>ID Pelanggan : <?php echo $row['idpelanggan']; ?></td>
  </tr>
  <tr>
  <td>Nama Pelanggan: <?php echo $row['namapelanggan']; ?></td>
    <td>No Telepon : <?php echo $row['nohp']; ?></td>
  <td>Provinsi : <?php echo $row['provinsi']; ?></td>
  </tr>
  <tr>
  <td>Kota/Kabupaten : <?php echo $row['kota/kabupaten']; ?></td>
    <td>Kecamatan : <?php echo $row['kecamatan']; ?></td>
  	<td>Kelurahan/Desa : <?php echo $row['kelurahan/desa']; ?></td>
  </tr>
  <tr>
  <td colspan="3">Nama Jalan :<?php echo $row['namajalan']; ?></td>
  </tr>
</table>
<table class="table table-striped">
							<thead>
								<tr>
									<th>ID Produk</th>
									<th>Foto</th>
									<th>Nama Produk</th>
									<th>Jumlah Beli</th>
									<th>Harga Satuan</th>
									<th>Subtotal</th>
								</tr>
							</thead>
							<tbody>
								<?php 
				include ('koneksi.php');
				$io = $row['idorder'];
				$tamp = "select * from detailorder where idorder ='$io'";
$query1 = mysql_query($tamp,$koneksi);
while ($row1 = mysql_fetch_array($query1)) {
				 ?>
                                <tr>
									<td><?php echo $row1['idproduk']; ?></td>
									<td><img width="40" height="65" alt="" src="fotoproduk/<?php echo $row1['foto']; ?>"></td>
									<td><?php echo $row1['namaproduk']; ?> </td>
									<td><?php echo $row1['jumbel']; ?></td>
									<td>Rp. <?php echo number_format($row1['hargasatuan']); ?></td>
									<td>Rp. <?php echo number_format($row1['subtotal']); ?></td>
								</tr>			  
								<?php } ?>			  
							</tbody>
						</table>

<table width="350">
  <tr>
    <td>Total harga Produk</td>
    <td>:</td>
    <td>Rp. <?php echo number_format($row['totalbayarproduk']); ?></td>
  </tr>
  <tr>
    <td>Ongkos Kirim</td>
    <td>:</td>
    <td>Rp. <?php echo number_format($row['ongkir']); ?></td>
  </tr>
  <tr>
    <td>Total Bayar</td>
    <td>:</td>
    <td>Rp. <?php echo number_format($row['totalbayar']); ?></td>
  </tr>
 
</table>
<hr>
               
 <?php } ?>				
  <?php }
		else{}		
				
				?>
<img height="20%" width="100%" src="../themes/images/footercetak.jpg">
</body>
</html>