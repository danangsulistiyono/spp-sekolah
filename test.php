<!DOCTYPE html>
<html>
<head>
	<title>Data Siswa</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body class="row">
	<div class="col-4"></div>

	<div class="col-4">
	<header>
        <h3><Center>Data Siswa</Center></h3>
    </header>

    <nav>
        <a href="input_siswa.php">Tambah Baru [=>]</a>
    </nav>

    <br>

		<table class="table table-bordered">
			<thead>
			<tr>
				<th >No</th>
				<th >NIS</th>
				<th >Nama</th>
				<th >Tanggak Lahir</th>
				<th >Jenis Kelamin</th>
				<th >Alamat</th>
			</tr>
			</thead>
			<tbody>
			<?php
			include 'koneksi.php';
			$no = 1;
			$data = mysqli_query($koneksi, "SELECT * FROM tb_siswa");
			while($row = mysqli_fetch_array($data)){
			?>
			
				<tr>
					<td><?php echo $no; ?></td>
					<td><?php echo $row['nis']; ?></td>
					<td><?php echo $row['nama']; ?></td>
					<td><?php echo $row['tanggal_lahir']; ?></td>
					<td><?php echo $row['jenis_kelamin']; ?></td>
					<td><?php echo $row['alamat']; ?></td>
					<td><?php echo $row['kelas']; ?></td>
					<td>
					<a href='form-edit.php?nis=<?php echo $row['nis']; ?>' class="btn btn-info btn-xs">Edit</a>
					<button class="btn btn-denger btn-xs"><i class="fa fa-trash-o"></i> Hapus</button>
					</td>
				</tr>
			
			<?php 
				$no++;} ?>
				</tbody>
		</table>
			</form>
		</div>

		<div class="col-4"></div>
</body>
</html>