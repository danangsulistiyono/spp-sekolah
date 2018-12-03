<!DOCTYPE html>
<html>
<head>
	<title>Penambahan Siswa</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body class="row">
	<div class="col-4"></div>

	<div class="col-4">

	<h3><center>* Penambahan Siswa *</center></h3><hr><br>
			
			<form action="proses.php" method="post">
				<table class="table table-sm">
					<tr>
						<td>
							<!-- <label>NIS</label> -->
							<input type="text" name="nis" class="form-control" autocomplete="off" placeholder="NIS" required/>
						</td>
						
					</tr>

					<tr>
						<td>
							<!-- <label>Nama</label> -->
							<input type="text" name="nama"  class="form-control" autocomplete="off" placeholder="NAMA" required/>
						</td>
					</tr>

					<tr>
						<td>
							<!-- <label>Tanggal Lahir</label> -->
							<input type="date" name="tgl_lahir"  class="form-control" required/>
						</td>
					</tr>

					<tr>
						<td>
							<!-- <label>Jenis Kelamin</label> -->
							<select name="jenis_kelamin" class="form-control" required>
								<option value="">- Pilih -</option>
								<option value="Laki-Laki">Laki-Laki</option>
								<option value="Perempuan">Perempuan</option>
							</select>
						</td>
					</tr>

					<tr>
						<td>
							<!-- <label>Alamat</label> -->
							<textarea name="alamat" rows="5" clos="50" class="form-control" utocomplete="off" placeholder="ALAMAT"></textarea>
						</td>
					</tr>
					<tr>
						<td>
							<!-- <label>Kelas</label> -->
							<select name="kelas" id="nama_kelas" class="form-control" required>
								<option value="">- Pilih -</option>
								<option value="vii">VII</option>
								<option value="viii">VIII</option>
								<option value="xi">XI</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>
							<input type="submit" name="daftar" value="Daftar" class="btn btn-success">
							<input type="reset" name="reset" value="Reset" class="btn btn-defaul">
						</td>
					</tr>

				</table>
			</form>
		</div>

		<div class="col-4"></div>
</body>
</html>