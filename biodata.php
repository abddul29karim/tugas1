<!DOCTYPE html PUBLIC>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>biodata</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<br/>
    <br/>
<ul class="dropmenu">
<li><img alt="Liferay" height="64" src="btpn.png" width="115"></li>
<li><a href="index.php">Tujuan</a>
    <ul>
    <li><a href="hidup.php">Hidup</a></li>
    <li><a href="kerja.php">Kerja</a></li>
    </ul>
</li>
<li><a href="biodata.php">Profil</a></li>
<li><a href="index.php">Login</a></li>
</ul>
<br/>
<br/>
<table class="table" width="70%" border="1" cellpadding="4" cellspacing="4" align="center">
<tr>
    <th>foto</th>
    <th>nik</th>
    <th>nama</th>
    <th>tgl_lahir</th>
    <th>alamat</th>
    <th>hobi</th>
</tr>
<?php
include 'koneksi.php';
$data = mysqli_query($koneksi,"select * from biodata");
while($d = mysqli_fetch_array($data)){
?>
<tr>

        <td><?="<img src='image/".$d['foto']."'style='width:200px; height:100px;'>"?></td>
        <td><?=$d['nik']?></td>
        <td><?=$d['nama']?></td>
        <td><?=$d['tgl_lahir']?></td>
        <td><?=$d['alamat']?></td>
        <td><?=$d['hobi']?></td>
</tr>
<?php }?>
</table>
<br/>
<br/>
    <table class="table" width="70%" border="1" cellpadding="4" cellspacing="4" align="center">>
		<tr>
			<th>NO</th>
			<th>sekolah</th>
			<th>jurusan</th>
			<th>masuk</th>
            <th>lulus</th>
		</tr>
		<?php 
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
			</tr>
			<?php 
		}
		?>
	</table>
    <br/>
    <br/>
    <table class="table" width="70%" border="1" cellpadding="4" cellspacing="4" align="center">
		<tr>
			<th>NO</th>
			<th>Perusahaan</th>
			<th>jabatan</th>
			<th>masuk</th>
            <th>keluar</th>
		</tr>
		<?php 

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

			</tr>
			<?php 
		}
		?>
    </table>
    <table class="table" width="70%" border="1" cellpadding="4" cellspacing="4" align="center">
    <tr>                
    <td>  
    <button type="submit" href="edit.php?id=<?php echo $d['id']; ?>">EDIT</button>
    <button type="submit" href="edit.php?id=<?php echo $d['id']; ?>">HAPUS</button>
    </td>
    </tr>                
    </table>
</body>
</html>