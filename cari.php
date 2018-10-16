<?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
 
<table border="1">
	<tr>
		<th>No</th>
		<th>Nim</th>
		<th>Nama</th>
		<th>Jenis Kelamin</th>
		<th>Prodi</th>
		<th>Fakultas</th>
		<th>Asal</th>
		<th>Moto Hidup</th>
	</tr>
	<?php 
	if(isset($_GET['cari'])){
		$cari = $_GET['crnim'];
		$data = mysql_query("SELECT * from data where nim = $cari");				
	}else{
		$data = mysql_query("SELECT * from data");		
	}
	$no = 1;
	while($d = mysql_fetch_array($data)){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $d['nama']; ?></td>
		<td> <?php echo $d['nim']; ?></td>
		<td><?php echo $d['kelamin']; ?></td>
		<td><?php echo $d['prodi']; ?></td>
		<td><?php echo $d['fakultas']; ?></td>
		<td><?php echo $d['asal']; ?></td>
		<td><?php echo $d['moto']; ?></td>
	</tr>
	<?php } ?>
</table>