<?php 
include "../koneksi.php"; 
$id=$_GET['id']; 
$query=mysql_query("select * from form_regist where id='$id'"); 
?> 
<form action="simpan.php" method="post"> 
<table border="1"> 
<?php 
while($row=mysql_fetch_array($query)){ 
 ?> 
 <input type="hidden" name="id" value="<?php echo $id;?>"/> 
			<tr> 
				<td width=150px>Nama</td> 
				<td width=50px><input type="text" name="nama" size="50"value="<?php echo $row['nama'];?>"></td> 
			</tr> 
			<tr> 
				<td>NPM</td> 
				<td><input type="text" name="npm" size="50" value="<?php echo $row['npm'];?>"></td> 
			</tr> 
			<tr>
				<td>Jenis Kelamin</td>
				<td><input type="radio" name="jenis_kelamin" value="Laki-laki" <?php if (['jenis_kelamin'=="Laki-laki"]) { echo "checked";}?>>Laki-laki &nbsp;&nbsp;
				<input type="radio" name="jenis_kelamin" value="Perempuan"  <?php if (['jenis_kelamin']=="Perempuan") { echo "checked";}?>>Perempuan</td> 
			</tr>
			<tr valign=top> 
				<td >Tempat Tanggal Lahir</td> 
				<td><input placeholder="Tempat" type="text" name="tempat_lahir" size="19" value="<?php echo $row['tempat_lahir'];?>">,<input placeholder="Tgl" type="text" name="tgl_lahir" size="5" value="<?php echo $row['tgl_lahir'];?>">/<input placeholder="Bln" type="text" name="bln_lahir" size="5" value="<?php echo $row['bln_lahir'];?>">/<input placeholder="Thn" type="text" name="thn_lahir" size="7" value="<?php echo $row['thn_lahir'];?>"></td> 
			</tr> 
			<tr> 
				<td>IPK</td> 
				<td><input type="text" name="ipk" size="20" value="<?php echo $row['ipk'];?>"></td> 
			</tr> 
			<tr> 
				<td>Agama</td> 
				<td><input type="text" name="agama" size="20" value="<?php echo $row['agama'];?>"></td> 
			</tr> 
			<tr valign=top> 
				<td>Alamat</td> 
				<td><textarea cols="37" rows="3" name="alamat"><?php echo $row['alamat'];?></textarea></td> 
			</tr> 
			<tr valign=top> 
				<td>Motivasi</td> 
				<td><textarea cols="37" rows="3" name="motivasi"><?php echo $row['motivasi'];?></textarea></td> 
			</tr> 
			<tr valign=top> 
				<td>Motto Hidup</td> 
				<td><textarea cols="37" rows="3" name="motto_hidup"><?php echo $row['motto_hidup'];?></textarea></td>
			</tr> 
			<tr> 
				<td><input type="submit" value="Simpan" name="simpan" /></td>
			</tr> 
 
 <?php 
} 
?> 
</table> 
</form>