<html>

<head>
	<title>Tambah Data</title>
</head>

<body>
	<?php
	include_once("config.php");

	if (isset($_POST['Submit'])) {
		$nama = mysqli_real_escape_string($mysqli, $_POST['nama']);
		$umur = mysqli_real_escape_string($mysqli, $_POST['umur']);
		$email = mysqli_real_escape_string($mysqli, $_POST['email']);
		$filename = $_FILES['gambar']['name'];

		if (empty($nama) || empty($umur) || empty($email) || empty($filename)) {

			if (empty($nama)) {
				echo "<font color='red'>Kolom Nama tidak boleh kosong.</font><br/>";
			}

			if (empty($umur)) {
				echo "<font color='red'>Kolom Umur tidak boleh kosong.</font><br/>";
			}

			if (empty($email)) {
				echo "<font color='red'>Kolom Email tidak boleh kosong.</font><br/>";
			}

			if (empty($filename)) {
				echo "<font color='red'>Kolom Gambar tidak boleh kosong.</font><br/>";
			}

			echo "<br/><a href='javascript:self.history.back();'>Kembali</a>";
		} else {
			$filetmpname = $_FILES['gambar']['tmp_name'];

			$folder = 'image/';
			move_uploaded_file($filetmpname, $folder . $filename);

			$result = mysqli_query($mysqli, "INSERT INTO users(nama,umur,email,gambar) VALUES('$nama', '$umur', '$email', '$filename')");

			echo "<font color='green'>Data Berhasil ditambahkan.";
			echo "<br/><a href='index.php'>Lihat Hasilnya</a>";
		}
	}
	?>
</body>

</html>
