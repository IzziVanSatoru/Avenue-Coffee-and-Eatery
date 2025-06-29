<?php
include '../config.php';
$id = $_GET['id'] ?? 0;

$result = $conn->query("SELECT * FROM coffee_requests WHERE id = $id");
$data = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Detail Request</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

  <h2 class="mb-4">📄 Detail Request Kopi</h2>

  <?php if ($data): ?>
    <ul class="list-group">
      <li class="list-group-item"><strong>Nama:</strong> <?= htmlspecialchars($data['nama']) ?></li>
      <li class="list-group-item"><strong>Email:</strong> <?= htmlspecialchars($data['email']) ?></li>
      <li class="list-group-item"><strong>Jenis Kopi:</strong> <?= htmlspecialchars($data['kopi']) ?></li>
      <li class="list-group-item"><strong>Catatan:</strong> <?= nl2br(htmlspecialchars($data['catatan'])) ?></li>
      <li class="list-group-item"><strong>Waktu:</strong> <?= $data['waktu'] ?></li>
    </ul>
  <?php else: ?>
    <div class="alert alert-danger mt-3">Data tidak ditemukan.</div>
  <?php endif; ?>

  <a href="AdminDashBoard.php" class="btn btn-secondary mt-4">← Kembali</a>

</body>
</html>
