<?php
// Fungsi untuk membaca file .env secara manual
function loadEnv($file = __DIR__ . '/.env') {
    if (!file_exists($file)) {
        die('<div style="padding:20px;background:#fee;border:1px solid #f00;color:#900;">
            <strong>.env file tidak ditemukan.</strong><br>
            Pastikan file <code>.env</code> ada di folder: <code>' . dirname($file) . '</code>
        </div>');
    }

    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos(trim($line), '#') === 0 || !strpos($line, '=')) continue;
        list($key, $val) = explode('=', $line, 2);
        $_ENV[trim($key)] = trim($val);
    }
}

// Load .env
loadEnv();

// Ambil variabel koneksi
$host = $_ENV['DB_HOST'] ?? 'localhost';
$db   = $_ENV['DB_NAME'] ?? '';
$user = $_ENV['DB_USER'] ?? '';
$pass = $_ENV['DB_PASS'] ?? '';

// Koneksi ke MySQL
$conn = new mysqli($host, $user, $pass, $db);

// Cek koneksi
if ($conn->connect_error) {
    die('<strong style="color:red;">Koneksi database gagal:</strong> ' . $conn->connect_error);
}
?>
