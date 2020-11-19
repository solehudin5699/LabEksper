<?php 
$host="localhost"; 
$user="root"; 
$password="1234"; 
$database="FormRegist"; 
$koneksi=mysql_connect($host,$user,$password); 
mysql_select_db($database,$koneksi); 
//cek koneksi 
if($koneksi){ 
 //echo "berhasil koneksi"; 
}else{ 
 echo "gagal koneksi"; 
} 
?>