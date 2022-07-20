<html>
	<head>
		<title>Daftar anggota komunitas</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	</head>

	<body bgcolor="wheat">
		<div align="center"><strong><font size="6" face="Courier New, Courier, mono">Form Pendaftaran</font></strong></div>
			<form name="form1" method="post" action="proses.php">
				<table width="58%" border="2" align="center">
					<tr>
						<td>Nama Lengkap</td>
						<td><input name="nama" type="text" id="nama"></td>
					</tr>

					<tr>
						<td>Alamat</td>
						<td><input name="alamat" type="text" id="alamat"></td>
					</tr>
					<tr>
						<td>No.telp</td>
						<td><input name="telp" type="text" id="telp"></td>
					</tr>

					<tr>
						<td>E-Mail</td>
						<td><input name="email" type="text" id="email"></td> </tr>
					</tr>

					<tr>
						<td>Status</td>
						<td>
							<select name="status" id="status">
								<option>Menikah</option>
								<option>Single</option>
							</select>
						</td>
					</tr>

					<tr>
						<td>Kelamin</td>
						<td>
							<select name="kelamin" id="kelamin">
								<option>Pria</option>
								<option>Wanita</option>
							</select>
						</td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="Submit" value="Kirim"><input type="reset" name="Submit2" value="Batal">
					</td>
					</tr>
				</table>
			</form>
		<div align="center"><strong><a href="lihat.php"><button type="button" class="btn btn-outline-primary">::Lihat Daftar Anggota:</button>
		</a></strong></div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	</body>
</html>