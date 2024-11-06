CREATE TABLE siswa_pkl (
  id INT PRIMARY KEY AUTO_INCREMENT,
  nis VARCHAR(10) NOT NULL,
  nama_siswa_pkl VARCHAR(50) NOT NULL,
  masa_pkl ENUM('3bulan', '4bulan','6bulan') NOT NULL,
  jurusan VARCHAR(50) NOT NULL,
  tempat_lab VARCHAR(255) NOT NULL
);
