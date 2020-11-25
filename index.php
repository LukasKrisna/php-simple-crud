<?php
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<html>

<head>
	<title>Tugas KK4B</title>
	<link rel="icon" href="image/logo-telkom-schools.png">
</head>

<body>
	<center>

	<h1>Selamat Datang!</h1>
    <p>Lukas Krisna Prastiyan</p>
    <p>XI RPL 3 / 23</p>
	
		<a href="add.html">Tambah Data Baru</a><br /><br />

		<table width='80%' border=0>

			<tr bgcolor='#CCCCCC'>
				<td>Nama</td>
				<td>Umur</td>
				<td>Email</td>
				<td>Gambar</td>
				<td>Update</td>
			</tr>
			<?php

			while ($res = mysqli_fetch_array($result)) {
				echo "<tr>";
				echo "<td>" . $res['nama'] . "</td>";
				echo "<td>" . $res['umur'] . "</td>";
				echo "<td>" . $res['email'] . "</td>";
				echo "<td><img width='80' src='image/" . $res['gambar'] . "'</td>";
				echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Kamu yakin untuk delete ini?')\">Delete</a></td>";
			}
			?>
		</table>
	</center>
</body>

</html>
