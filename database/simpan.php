<?php 
include "../koneksi.php"; 
$id=$_POST['id']; 
$nama=$_POST['nama']; 
$jenis_kelamin=$_POST['jenis_kelamin'];
$alamat=$_POST['alamat']; 
$npm=$_POST['npm'];
$tempat_lahir=$_POST['tempat_lahir'];
$tgl_lahir=$_POST['tgl_lahir'];
$bln_lahir=$_POST['bln_lahir'];
$thn_lahir=$_POST['thn_lahir']; 
$ipk=$_POST['ipk'];
$agama=$_POST['agama'];
$motivasi=$_POST['motivasi'];
$motto_hidup=$_POST ['motto_hidup'];
$query=mysql_query("update form_regist set nama='$nama',npm='$npm',jenis_kelamin='$jenis_kelamin',tempat_lahir='$tempat_lahir',tgl_lahir='$tgl_lahir',bln_lahir='$bln_lahir',thn_lahir='$thn_lahir',ipk='$ipk',agama='$agama',alamat='$alamat',motivasi='$motivasi', motto_hidup='$motto_hidup' where id='$id'"); 
if($query){ 
 echo "Berhasil update data ke database "; 
 ?><a href="tabel.php">Lihat data di Tabel</a><?php
}else{ 
 echo "Gagal update data"; 
 echo mysql_error(); 
} 
?>