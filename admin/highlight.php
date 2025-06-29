<?php
include '../config.php';

$result = $conn->query("
  SELECT kopi, COUNT(*) AS jumlah 
  FROM coffee_requests 
  GROUP BY kopi 
  ORDER BY jumlah DESC 
  LIMIT 3
");
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Highlight Kopi</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

  <h2 class="mb-4">🔥 Kopi Terfavorit</h2>

  <?php if ($result->num_rows > 0): ?>
    <ol class="list-group list-group-numbered">
      <?php while ($row = $result->fetch_assoc()): ?>
        <li class="list-group-item d-flex justify-content-between align-items-center">
          <?= htmlspecialchars($row['kopi']) ?>
          <span class="badge bg-primary rounded-pill"><?= $row['jumlah'] ?>x</span>
        </li>
      <?php endwhile; ?>
    </ol>
  <?php else: ?>
    <div class="alert alert-warning">Belum ada data request kopi.</div>
  <?php endif; ?>

  <a href="AdminDashBoard.php" class="btn btn-secondary mt-4">← Kembali</a>
</body>
</html>
