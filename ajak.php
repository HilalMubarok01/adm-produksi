<?php
include 'konn.php';
 
$query = mysqli_query($conn, "SELECT * FROM produk WHERE idproduk='".mysqli_escape_string($conn, $_POST['idproduk'])."'");
$data = mysqli_fetch_array($query);
 
echo json_encode($data);
?>