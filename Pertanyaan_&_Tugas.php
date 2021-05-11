<!DOCTYPE html>
<html>
<head>
	<title>Pertanyaan dan Tugas</title>
</head>
<body>
	<h1>Form Input</h2>
		<form method="post">
			<label>Nama: </label>
			<input type="text" name="nama"><br>
			<label>Tanggal Lahir: </label>
			<input type="date" name="tanggal_lahir"><br>
			<label>Pekerjaan: </label>
			<input type="text" name="pekerjaan"><br>
			<input type="submit" value="Kirim">
		</form>
	<?php
		echo 'Selamat Datang ' . $_POST['nama'], $_POST['tanggal_lahir'], $_POST['pekerjaan'];
	$tgl_lahir ="tanggal_lahir";
	$birthday  = new DateTime($tgl_lahir);
	$sekarang = new DateTime();

	$usia = $sekarang->diff($birthday);

	?>

</body>
</html>