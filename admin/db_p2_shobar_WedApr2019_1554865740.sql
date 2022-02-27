DROP TABLE IF EXISTS tb_level;

CREATE TABLE `tb_level` (
  `id_level` int(11) NOT NULL,
  `nama_level` varchar(25) NOT NULL,
  PRIMARY KEY (`id_level`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO tb_level VALUES("1","admin");
INSERT INTO tb_level VALUES("2","petugas");
INSERT INTO tb_level VALUES("3","penumpang");



DROP TABLE IF EXISTS tb_pemesanan;

CREATE TABLE `tb_pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `kode_pemesanan` int(15) NOT NULL,
  `tanggal_pemesanan` date NOT NULL,
  `tempat_pemesanan` varchar(25) NOT NULL,
  `id_penumpang` int(11) NOT NULL,
  `kode_kursi` int(15) NOT NULL,
  `id_rute` int(15) NOT NULL,
  `tujuan` varchar(25) NOT NULL,
  `tanggal_berangkat` date NOT NULL,
  `jam_cekin` time NOT NULL,
  `jam_berangkat` time NOT NULL,
  `total_bayar` int(15) NOT NULL,
  `id_petugas` int(15) NOT NULL,
  PRIMARY KEY (`id_pemesanan`) USING BTREE,
  KEY `id_pelanggan` (`id_penumpang`),
  KEY `id_petugas` (`id_petugas`),
  KEY `id_rute` (`id_rute`) USING BTREE,
  CONSTRAINT `tb_pemesanan_ibfk_1` FOREIGN KEY (`id_penumpang`) REFERENCES `tb_penumpang` (`id_penumpang`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tb_pemesanan_ibfk_2` FOREIGN KEY (`id_petugas`) REFERENCES `tb_petugas` (`id_petugas`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tb_pemesanan_ibfk_3` FOREIGN KEY (`id_rute`) REFERENCES `tb_rute` (`id_rute`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO tb_pemesanan VALUES("1","1","2019-09-09","loket1","1","12","2","Banjarmasin","2019-09-10","15:00:00","16:00:00","2500","2");



DROP TABLE IF EXISTS tb_penumpang;

CREATE TABLE `tb_penumpang` (
  `id_penumpang` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `nama_penumpang` varchar(25) NOT NULL,
  `alamat_penumpang` varchar(25) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('p','l') NOT NULL,
  `telefone` int(12) NOT NULL,
  KEY `id_penumpang` (`id_penumpang`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO tb_penumpang VALUES("1","shobar","12345","shobar","bandung","2019-09-09","l","89898");
INSERT INTO tb_penumpang VALUES("2","dhefa","12345","diki","jakarta","2019-09-09","l","98989");



DROP TABLE IF EXISTS tb_petugas;

CREATE TABLE `tb_petugas` (
  `id_petugas` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `nama_petugas` varchar(25) NOT NULL,
  `id_level` int(11) NOT NULL,
  PRIMARY KEY (`id_petugas`),
  KEY `id_level` (`id_level`) USING BTREE,
  CONSTRAINT `tb_petugas_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `tb_level` (`id_level`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO tb_petugas VALUES("1","admin","admin","shobar","1");
INSERT INTO tb_petugas VALUES("2","petugas","petugas","aldi","2");
INSERT INTO tb_petugas VALUES("3","penumpang","penumpang","dhefa","3");
INSERT INTO tb_petugas VALUES("4","hj","123","hj","2");



DROP TABLE IF EXISTS tb_rute;

CREATE TABLE `tb_rute` (
  `id_rute` int(11) NOT NULL,
  `tujuan` varchar(25) NOT NULL,
  `rute_awal` varchar(25) NOT NULL,
  `rute_akhir` varchar(25) NOT NULL,
  `harga` int(15) NOT NULL,
  `id_transportasi` int(12) NOT NULL,
  KEY `id_transportasi` (`id_transportasi`) USING BTREE,
  KEY `id_transportasi_2` (`id_transportasi`) USING BTREE,
  KEY `id_rute` (`id_rute`) USING BTREE,
  CONSTRAINT `tb_rute_ibfk_1` FOREIGN KEY (`id_transportasi`) REFERENCES `tb_transportasi` (`id_transportasi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO tb_rute VALUES("2","jkarta","rrrr","ddddd","3000","2");



DROP TABLE IF EXISTS tb_transportasi;

CREATE TABLE `tb_transportasi` (
  `id_transportasi` int(11) NOT NULL AUTO_INCREMENT,
  `kode` int(15) NOT NULL,
  `jumlah_kursi` int(15) NOT NULL,
  `keterangan` varchar(35) NOT NULL,
  `id_type_transportasi` int(11) NOT NULL,
  KEY `id_type_transportasi` (`id_type_transportasi`) USING BTREE,
  KEY `id_transportasi` (`id_transportasi`) USING BTREE,
  CONSTRAINT `tb_transportasi_ibfk_1` FOREIGN KEY (`id_type_transportasi`) REFERENCES `tb_type_transportasi` (`id_type_transportasi`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

INSERT INTO tb_transportasi VALUES("2","45","22","buruk","2");
INSERT INTO tb_transportasi VALUES("3","34","5","baik","3");
INSERT INTO tb_transportasi VALUES("3","34","5","baik","3");
INSERT INTO tb_transportasi VALUES("3","34","5","baik","3");
INSERT INTO tb_transportasi VALUES("2","78","789","baik","2");
INSERT INTO tb_transportasi VALUES("2","0","0","","2");
INSERT INTO tb_transportasi VALUES("12","78","789","baik","2");



DROP TABLE IF EXISTS tb_type_transportasi;

CREATE TABLE `tb_type_transportasi` (
  `id_type_transportasi` int(11) NOT NULL,
  `nama_type` varchar(25) NOT NULL,
  `keterangan` varchar(25) NOT NULL,
  KEY `id_type_transportasi` (`id_type_transportasi`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO tb_type_transportasi VALUES("1","admin","baik");
INSERT INTO tb_type_transportasi VALUES("2","shobar","bagus");
INSERT INTO tb_type_transportasi VALUES("3","penumpang","buruk");
INSERT INTO tb_type_transportasi VALUES("4","Dhefa","buruk");
INSERT INTO tb_type_transportasi VALUES("5","Dhefa","bagus");
INSERT INTO tb_type_transportasi VALUES("2","shobar","bagus");
INSERT INTO tb_type_transportasi VALUES("2","shobar","bagus");
INSERT INTO tb_type_transportasi VALUES("4","Dhefa","buruk");
INSERT INTO tb_type_transportasi VALUES("2","shobar","bagus");
INSERT INTO tb_type_transportasi VALUES("2","jkjk","jkj");
INSERT INTO tb_type_transportasi VALUES("2","nk","kjk");
INSERT INTO tb_type_transportasi VALUES("13","ss","bagus");



