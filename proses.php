<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Laboratorium Fisika Eksperimen II | FISIKA &#8211; UNPAD</title>
<link rel="icon" href="favicon.png" type="image/x-icon">
<link href="css.css" rel="stylesheet" type="text/css" />
</head>
<body >

<div id="web">
<div id="container">
<div id="header"></div>
<div id="batas1"></div>
<div id="nav">

<ul>
<li><a href="eksper.html">Beranda</a></li>
		<li><a href="profil.html">Profil</a></li>
		<li><a href="fasilitas.html">Fasilitas</a></li>
		<li><a href="jadwal.html">Praktikum</a></li>
		<li><a id="navselect" href="daftarasisten.html">Aslab</a></li>
		<li><a href="kontak.html">Kontak</a></li>
			
</ul></div>
<div id="content">
<div id="batas"></div>
<div id="left">
<div id="welcome"><table><tr><td><marquee behavior="scroll" scrollamount=3 onmouseover="this.stop();" onmouseout="this.start();" direction="left"><b>Selamat Datang di LABORATORIUM FISIKA EKSPERIMEN II FMIPA UNPAD</b><marquee></td></tr></table></div>
<div id="nav1">
<ul>
<li><a  href="daftarasisten.html">Asisten Laboratorium</a></li>
		<li><a id="navselect1" href="form.php">Pendaftaran Asisten</a></li>
		<li><a href="login.html">Login</a></li>
	
</ul>
</div>
<h1>Laboratorium Fisika Eksperimen</h1>
<p align=justify>Laboratorium Fisika Eksperimen merupakan laboratorium pendidikan yang melayani kegiatan mata kuliah praktikum Fisika Eksperimen Menengah (I) serta praktikum Fisika Eksperimen Lanjutan (II).</p>

			<p align=justify>Laboratorium ini bertempat di Gedung Fisika, Departemen Fisika Fakultas MIPA, Universitas Padjadjaran. Jl. Raya Jatinangor KM 21, Kabupaten Sumedang Jawa Barat.</p>

			<p align=justify>Kegiatan praktikum yang diselenggarakan oleh Laboratorium ini, merupakan salah satu mata kuliah praktikum wajib bagi mahasiswa program studi Fisika, Departemen Fisika, FMIPA UNPAD. Kegiatan praktikum Fisika Eksperimen Menengah diperuntukkan bagi mahasiswa semester 3 (Fisika Eksperimen IA) dan 4( Fisika Eksperimen IB), sedangkan Fisika Eksperimen Lanjutan diperuntukkan bagai mahasiswa semester 5 (Fisika Eksperimen IIA) dan 6 (Fisika Eksperimen IIB).</p>
			
</div>
<div id="tengah"> <br>
			<h1 align=center>Form Pendaftaran Aslab</h1>
			<br>
<p align=justify>

<?php 
include "koneksi.php"; 
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
$query=mysql_query("insert into form_regist(nama, npm,jenis_kelamin,tempat_lahir,tgl_lahir,bln_lahir,thn_lahir,ipk,agama,alamat,motivasi, motto_hidup) value( '$nama','$npm', '$jenis_kelamin','$tempat_lahir','$tgl_lahir','$bln_lahir','$thn_lahir','$ipk','$agama','$alamat','$motivasi','$motto_hidup')"); 
if($query){ 
 echo "Terimakasih telah mendaftar sebagai Asisten Lab "; 
 ?><a href="form.php"><br>Kembali ke Form Pendaftaran</a><?php
}else{ 
 echo "Gagal input data"; 	
 echo mysql_error(); 
} 
?>

</p>

</div>
<div id="cari">
<form  method=post><input placeholder="Cari di sini..." name=cari type=search size=17><input type=submit value=Cari></form>
</div>
<div id="kotakwaktu">
<div style=" text-align:center background-color:#397eb7;" id="data"><script src="waktu.js" type="text/javascript">
</script> </div></div>
<div id="right">

<p align=center color=gold>Laboratorium Lain:</p>
<table><tr align=left><td><a href="#">Laboratorium Fisika Dasar</a></td></tr>
<tr align=left><td><a href="#">Laboratorium Fisika Instrumentasi</a></a></td></tr>
<tr align=left><td><a href="#">Laboratorium Elektronika</a></a></td></tr>
<tr align=left><td><a href="#">Laboratorium Komputasi dan Metode Numerik</a></a></td></tr>
<tr align=left><td><a href="#">Laboratorium Fisika Energi</a></a></td></tr>
<tr align=left><td><a href="#">Laboratorium Fisika Material</a></a></td></tr>
<tr ><td color=gold>_______________</td></tr>
<tr><td><a href="#">Departemen Fisika FMPA UNPAD</a></a></td></tr>
<tr><td><a href="#">Website FMPA UNPAD</a></a></td></tr>
<tr><td><a href="#">Website Universitas Padjadjaran</a></a></td></tr>
</table>
</div>

</div>
</div>
<div id="footer"><img src="unpad.png" width=30px height=30px>&nbsp;<img src="favicon.png" width=30px height=30px><br>| Copyright © Departemen Fisika Universitas Padjadjaran 2018 |</div>
</div>

</body>
</html>