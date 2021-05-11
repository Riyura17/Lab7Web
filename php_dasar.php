<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP Dasar</title>
</head>
<body>
	<h2>Perulangan Do while</h2>
	<?php
		echo "Perulangan 10 sampai 20 <br />";
		$i=10;
		do {
			echo "Perulangan ke: " . $i . '<br />';
			$i++;
		} while ($i<=20);
	?>
	<h2>Perulangan While</h2>
	<?php
		echo "Perulangan 1 sampai 10 <br />";
			$i=1; 
			while ($i<=10) {
				echo "Perulangan ke: " . $i . '<br />';
				$i++;
		}
	?>
	<h2>Perulangan for</h2>
	<?php
		echo "Perulangan 1 sampai 10 <br />";
			for ($i=1; $i<=10; $i++) {
				echo "Perulangan ke: " . $i . '<br />';
			}
		echo "Perulangan Menurun dari 10 ke 1 <br />";
			for ($i=10; $i>=1; $i--) { 
				echo "Perulangan ke: " . $i . '<br />'; 
		}
	?>
	<h2>Kondisi Switch</h2>
	<?php
		$nama_hari = date("l");
		switch ($nama_hari) {
			case "Sunday":
				echo "Minggu";
				break;
			case "Monday":
				echo "Senin";
				break;
			case "Tuesday":
				echo "Selasa";
				break;
			default:
				echo "Sabtu";
		}
	?>
	<h2>Kondisi IF</h2>
	<?php
		$nama_hari = date("l");
			if ($nama_hari == "Sunday") {
				echo "Minggu"; 
			} elseif ($nama_hari == "Monday") {
				echo "Senin"; 
			} else { echo "Selasa";
		}
	?>
	<h2>Operator</h2>
	<?php
		$gaji = 1000000;
		$pajak = 0.5;
		$thp = $gaji - ($gaji*$pajak);
		echo "Gaji sebelum pajak = Rp. $gaji <br>";
		echo "Gaji yang dibawa pulang = Rp. $thp";
	?>
	<h1>Belajar PHP Dasar</h1>
	<?php
		echo "hello world";
	?>
	<h2>Menggunakan Variable</h2>
	<?php 
		$nim = "311910652";
		$nama = 'Ridho Yusuf Fitra';
		echo "NIM : " . $nim . "<br>";
		echo "Nama : $nama";
	?>
	<h2>Predefine Variable</h2>
	<?php
		echo 'Selamat Datang ' . $_GET['nama'];
	?>
	<h2>Form Input</h2>
	<form method="post">
		<label>Nama: </label>
		<input type="text" name="nama">
		<input type="submit" value="Kirim">
	</form>
	<?php
		echo 'Selamat Datang ' . $_POST['nama'];
	?>
</body>
</html>