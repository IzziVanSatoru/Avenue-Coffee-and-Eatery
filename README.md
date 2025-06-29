# ☕ Avenue Coffee and Eatery

Sebuah website sederhana untuk coffee shop lokal, Avenue Coffee and Eatery, yang memungkinkan pelanggan melakukan request kopi secara langsung, dan admin dapat mengelola request melalui dashboard.

---

## 🚀 Tech Stack
- PHP Native (tanpa framework)
- MySQL
- Bootstrap 5 (CDN)
- .env untuk konfigurasi DB

---

## 📁 Struktur Folder

```
avenue-coffee/
├── .env                # File konfigurasi DB (jangan di-push ke GitHub)
├── config.php          # Koneksi ke database & pembacaan .env
├── database.sql        # SQL struktur + dummy data
│
├── client/             # Area untuk user/pelanggan
│   ├── index.php       # Landing page
│   ├── request.php     # Form permintaan kopi
│   ├── submit.php      # Proses input
│   └── success.php     # Notifikasi sukses
│
├── admin/              # Area admin (tanpa login)
    ├── AdminDashBoard.php # Tabel request kopi
    ├── detail.php      # Detail request
    ├── delete.php      # Hapus data
    ├── statistik.php   # Statistik jumlah kopi
    └── highlight.php   # 3 kopi terfavorit
```

---

## ⚙️ Setup Project

1. Clone repositori:
```bash
git clone https://github.com/IzziVanSatoru/Avenue-Coffee-and-Eatery.git
```

2. Buat file `.env` di root:
```ini
DB_HOST=localhost
DB_NAME=avenue_coffee
DB_USER=root
DB_PASS=
```

3. Import `database.sql` ke phpMyAdmin atau MySQL:
```sql
SOURCE /path/to/database.sql;



```

4. Jalankan project via `localhost`, contoh:
```
http://localhost/avenue-coffee/client/index.php
```

5. cara masuk admin
```
http://localhost/project_biasa/avenue-coffee/admin/AdminDashBoard.php
```

tergantung kalian naru folder project nya dimana
---

## 🧠 Entity Relationship Diagram (ERD)

```
+--------------------+
|  coffee_requests   |
+--------------------+
| id (PK)            |
| nama               |
| email              |
| kopi               |
| catatan            |
| rating             |
| waktu              |
+--------------------+
```

- **id**: Primary key, auto increment
- **nama**: Nama pemesan
- **email**: Email aktif
- **kopi**: Jenis kopi yang diminta
- **catatan**: Keterangan tambahan (opsional)
- **rating**: Penilaian dari 1-5
- **waktu**: Timestamp saat request masuk

---

---

## 📜 Lisensi

MIT License.

---

## ✨ Credits

Dikembangkan oleh Mastah ☕, dengan cinta untuk project web lokal dan praktikum belajar PHP native.