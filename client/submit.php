<?php
include '../config.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$kopi = $_POST['kopi'];
$catatan = $_POST['catatan'];

$stmt = $conn->prepare("INSERT INTO coffee_requests (nama, email, kopi, catatan) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $nama, $email, $kopi, $catatan);
$stmt->execute();

header("Location: success.php");
exit;
?>
