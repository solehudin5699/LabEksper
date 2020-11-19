<?php 
include "../koneksi.php"; 
$id=$_GET['id']; 
$query=mysql_query("delete from form_regist where id='$id'"); 
if($query){ 
 ?><script language="javascript">document.location.href="tabel.php";</script><?php 
}else{ 
 echo "gagal hapus data"; 
} 
?>