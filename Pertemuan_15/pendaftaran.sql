DROP DATABASE IF EXISTS pendaftaran;
CREATE DATABASE pendaftaran;
USE pendaftaran;

CREATE TABLE calon_siswa (
id INT NOT NULL AUTO_INCREMENT,
nama VARCHAR(30) NOT NULL,
alamat VARCHAR(64) NOT NULL,
jns_kelamin VARCHAR(10) NOT NULL,
agama VARCHAR(16) NOT NULL,
sekolah_asal VARCHAR(20) NOT NULL,
PRIMARY KEY(id)
);