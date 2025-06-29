<?php
$envPath = '../.env';
if (!file_exists($envPath)) {
  die('<div style="padding:20px;background:#fee;border:1px solid #f00;color:#900;">
    <strong>.env file tidak ditemukan.</strong><br>
    Pastikan file <code>.env</code> berada di direktori root proyek (bukan di /client).
  </div>');
}

include '../config.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Request Kopi - Avenue Coffee</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
  <h2 class="mb-4">☕ Form Request Kopi</h2>

  <form action="submit.php" method="POST" class="border p-4 rounded shadow-sm bg-light">
    <div class="mb-3">
      <label class="form-label">Nama Lengkap</label>
      <input type="text" name="nama" class="form-control" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Email Aktif</label>
      <input type="email" name="email" class="form-control" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Jenis Kopi</label>
      <input type="text" name="kopi" class="form-control" placeholder="Contoh: Cappuccino" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Catatan Tambahan</label>
      <textarea name="catatan" class="form-control" rows="3" placeholder="Opsional..."></textarea>
    </div>

    <div class="mb-4">
      <label class="form-label">Rating (1–5)</label>
      <select name="rating" class="form-select" required>
        <option value="">Pilih Rating</option>
        <option value="1">1 - Kurang</option>
        <option value="2">2 - Biasa</option>
        <option value="3">3 - Lumayan</option>
        <option value="4">4 - Enak</option>
        <option value="5">5 - Mantap!</option>
      </select>
    </div>

    <button type="submit" class="btn btn-dark w-100">Kirim Request</button>
  </form>

</body>
</html>
