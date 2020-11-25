<?php
include("config.php");

$id = $_GET['id'];

$data = mysqli_query($mysqli, "SELECT gambar FROM users WHERE id='$id'");
$dataImage = mysqli_fetch_assoc($data);
$oldImage = $dataImage['gambar'];

$link = "image/" . $oldImage;
unlink($link);

$result = mysqli_query($mysqli, "DELETE FROM users WHERE id=$id");

header("Location:index.php");
