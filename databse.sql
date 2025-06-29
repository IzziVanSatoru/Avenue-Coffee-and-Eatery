-- Buat database
CREATE DATABASE IF NOT EXISTS avenue_coffee;
USE avenue_coffee;

-- Tabel request kopi
CREATE TABLE IF NOT EXISTS coffee_requests (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    kopi VARCHAR(100) NOT NULL,
    catatan TEXT,
    rating INT CHECK (rating BETWEEN 1 AND 5),
    waktu TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Dummy data manusia nyata (bukan AI)
INSERT INTO coffee_requests (nama, email, kopi, catatan, rating) VALUES
('Andi Setiawan',     'andi.setiawan@gmail.com',     'Americano',     'Sedikit pahit, tolong jangan pakai gula.', 4),
('Dewi Lestari',      'dewi.lestari@yahoo.com',      'Cappuccino',    'Tambahkan sedikit bubuk coklat ya',       5),
('Budi Hartono',      'budi.hrt@gmail.com',          'Espresso',      'Espresso single shot aja',                3),
('Niken Maharani',    'niken.rani@outlook.com',      'Latte',         'Foam-nya jangan terlalu banyak',          5),
('Rizky Ananda',      'rizky.nanda@gmail.com',       'Vietnam Drip',  'Boleh tambah susu kental manis?',         4),
('Sarah Fitriani',    'sarahfitriani@hotmail.com',   'Cold Brew',     'Ice cube-nya banyakin ya',                5),
('Dimas Prasetyo',    'dimas.ps@gmail.com',          'Kopi Tubruk',   'Tolong agak kental',                      4),
('Rani Aprilia',      'rani.aprilia@gmail.com',      'Mochaccino',    'Tolong tanpa whipped cream',              3),
('Yusuf Maulana',     'yusuf.mln@ymail.com',         'Affogato',      'Pakai es krim vanilla lokal aja',         5),
('Intan Permatasari', 'intan.permata@yahoo.com',     'Kopi Susu Gula Aren', 'Manisnya sedang saja',             5);
