<?php
include '../config.php';
$id = $_GET['id'] ?? 0;

$conn->query("DELETE FROM coffee_requests WHERE id = $id");

header("Location: AdminDashBoard.php");
exit;
?>
