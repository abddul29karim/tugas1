<!DOCTYPE html>
<html>
<head>
	<title>pendidikan</title>
</head>
<body>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>Perusahaan</th>
			<th>jabatan</th>
			<th>masuk</th>
            <th>keluar</th>
			<th>aksi</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from pengalaman");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['pt']; ?></td>
				<td><?php echo $d['jabatan']; ?></td>
                <td><?php echo $d['dari']; ?></td>
                <td><?php echo $d['sampai']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>