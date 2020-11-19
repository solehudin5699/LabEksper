<?php 
			include "../koneksi.php"; 
			$query=mysql_query("select * from form_regist"); 
			$jumlah=mysql_num_rows($query); 
			echo "Jumlah data ada : ".$jumlah; 
?> 
			<table align=center border-color=#c5d2fd rules="all" border=1  font-size="5pt"> 
			<tr bgcolor=#4770FF> 
				<th width=auto>No.</th>
				<th width=auto>Nama</th>
				<th width=auto>NPM</th>  
				<th width=auto>Jenis Kelamin</th>
				<th width=auto>Tempat Tanggal Lahir</th> 
				<th width=auto>IPK</th> 
				<th width=auto>Agama</th> 
				<th width=auto>Alamat</th> 
				<th width=auto>Motivasi</th> 
				<th width=auto>Motto Hidup</th> 
				<th width=auto>Perubahan Data</th> 
				</tr> 
<?php $c=0;

			while($row=mysql_fetch_array($query)){ 
?>
 
			<tr> 
				<td width=auto align=center><?php echo $c+=1;?></td> 
				<td width=auto align=center><?php echo $row['nama'];?></td> 
				<td width=auto align=center><?php echo $row['npm'];?></td>
				<td width=auto align=center><?php echo $row['jenis_kelamin'];?></td>
				<td width=auto align=center><?php echo $row['tempat_lahir'];?>,&nbsp;<?php echo $row['tgl_lahir'];?>/<?php echo $row['bln_lahir'];?>/<?php echo $row['thn_lahir'];?></td> 
				<td width=auto align=center><?php echo $row['ipk'];?></td> 
				<td width=auto align=center><?php echo $row['agama'];?></td>
				<td width=auto align=center><?php echo $row['alamat'];?></td>
				<td width=auto align=center><?php echo $row['motivasi'];?></td>
				<td width=auto align=center><?php echo $row['motto_hidup'];?></td>
				<td width=auto align=center> 
				 <a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Apakah anda 
				yakin?')">Delete</a> 
				 <a href="update.php?id=<?php echo $row['id']; ?>">Update</a> 
				 </td> 
				<?php 
				} 
				?> 
				</table>