<?php 
// koneksi database
include 'koneksi.php';
 

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
if (!empty($nama)) {
    mysqli_query($koneksi,"insert into santri values('','$nama','$alamat')");

}
header("location:index.php");
 
?>