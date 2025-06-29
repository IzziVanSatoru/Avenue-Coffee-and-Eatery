<?php
include '../config.php';

$total = $conn->query("SELECT COUNT(*) AS total FROM coffee_requests")->fetch_assoc()['total'];
$jenis = $conn->query("SELECT COUNT(DISTINCT kopi) AS jenis FROM coffee_requests")->fetch_assoc()['jenis'];
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Statistik Kopi</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5 text-center">
  <h2 class="mb-4">📈 Statistik Permintaan Kopi</h2>

  <div class="row justify-content-center">
    <div class="col-md-4">
      <div class="card border-dark mb-3">
        <div class="card-body">
          <h5>Total Request</h5>
          <h1><?= $total ?></h1>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card border-success mb-3">
        <div class="card-body">
          <h5>Jenis Kopi Unik</h5>
          <h1><?= $jenis ?></h1>
        </div>
      </div>
    </div>
  </div>

  <a href="AdminDashBoard.php" class="btn btn-secondary mt-4">← Kembali</a>
</body>
</html>
