DROP TABLE IF EXISTS tb_level;

CREATE TABLE `tb_level` (
  `id_level` int(11) NOT NULL,
  `nama_level` varchar(25) NOT NULL,
  PRIMARY KEY (`id_level`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO tb_level VALUES("1","shobar");



DROP TABLE IF EXISTS tb_pemesanan;

CREATE TABLE `tb_pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `kode_pemesanan` int(15) NOT NULL,
  `tanggal_pemesanan` date NOT NULL,
  `tempat_pemesanan` varchar(25) NOT NULL,
  `id_pelanggan` int(15) NOT NULL,
  `kode_kursi` int(15) NOT NULL,
  `id_rute` int(15) NOT NULL,
  `tujuan` varchar(25) NOT NULL,
  `tanggal_berangkat` date NOT NULL,
  `jam_cekin` time NOT NULL,
  `jam_berangkat` time NOT NULL,
  `total_bayar` int(15) NOT NULL,
  `id_petugas` int(15) NOT NULL,
  PRIMARY KEY (`id_pemesanan`),
  KEY `id_pelanggan` (`id_pelanggan`),
  KEY `id_petugas` (`id_petugas`),
  CONSTRAINT `tb_pemesanan_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `tb_penumpang` (`id_penumpang`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tb_pemesanan_ibfk_2` FOREIGN KEY (`id_petugas`) REFERENCES `tb_petugas` (`id_petugas`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




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
  PRIMARY KEY (`id_penumpang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO tb_penumpang VALUES("1","jjkjk","kjkjkjk","shobar","bandung","2021-10-29","l","2147483647");



DROP TABLE IF EXISTS tb_petugas;

CREATE TABLE `tb_petugas` (
  `id_petugas` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `nama_petugas` varchar(25) NOT NULL,
  `id_level` int(11) NOT NULL,
  PRIMARY KEY (`id_petugas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO tb_petugas VALUES("1","admin","admin","shobar","1");
INSERT INTO tb_petugas VALUES("2","petugas","petugas","aldi","2");
INSERT INTO tb_petugas VALUES("3","penumpang","penumpang","dhefa","3");
INSERT INTO tb_petugas VALUES("4","1943011","1943011","Abdul","4");
INSERT INTO tb_petugas VALUES("5","abdul","abdul","abdul jainudin","5");



DROP TABLE IF EXISTS tb_rute;

CREATE TABLE `tb_rute` (
  `id_rute` int(11) NOT NULL,
  `tujuan` varchar(25) NOT NULL,
  `rute_awal` varchar(25) NOT NULL,
  `rute_akhir` varchar(25) NOT NULL,
  `harga` int(15) NOT NULL,
  `id_transportasi` int(12) NOT NULL,
  PRIMARY KEY (`id_rute`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO tb_rute VALUES("1","jakarta","bandung","jakarta","50000","1");



DROP TABLE IF EXISTS tb_transportasi;

CREATE TABLE `tb_transportasi` (
  `id_transportasi` int(11) NOT NULL,
  `kode` int(15) NOT NULL,
  `jumlah_kursi` int(15) NOT NULL,
  `keterangan` varchar(35) NOT NULL,
  `id_type_transportasi` int(15) NOT NULL,
  PRIMARY KEY (`id_transportasi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS tb_type_transportasi;

CREATE TABLE `tb_type_transportasi` (
  `id_type_transportasi` int(11) NOT NULL,
  `nama_type` varchar(25) NOT NULL,
  `keterangan` varchar(25) NOT NULL,
  PRIMARY KEY (`id_type_transportasi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




