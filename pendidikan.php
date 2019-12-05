<!DOCTYPE html>
<html>
<head>
	<title>pendidikan</title>
</head>
<body>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>sekolah</th>
			<th>jurusan</th>
			<th>masuk</th>
            <th>lulus</th>
			<th>aksi</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from pendidikan");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['sekolah']; ?></td>
				<td><?php echo $d['jurusan']; ?></td>
                <td><?php echo $d['masuk']; ?></td>
                <td><?php echo $d['lulus']; ?></td>
				<td>
				<button href="edit.php?id=<?php echo $d['id'];?>" class="btn second">EDIT</button>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>