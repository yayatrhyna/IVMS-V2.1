

CREATE TABLE `backset` (
  `url` varchar(100) NOT NULL,
  `sessiontime` varchar(4) DEFAULT NULL,
  `footer` varchar(50) DEFAULT NULL,
  `themesback` varchar(2) DEFAULT NULL,
  `responsive` varchar(2) DEFAULT NULL,
  `namabisnis1` tinytext NOT NULL,
  `mode` varchar(1) NOT NULL,
  `prefikbarcode` varchar(10) NOT NULL,
  PRIMARY KEY (`url`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO backset VALUES("http://localhost:8056/stok/","100","Code Null","4","0","Code Null","0","ID");



CREATE TABLE `barang` (
  `kode` varchar(20) NOT NULL,
  `sku` varchar(20) NOT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `hargabeli` int(11) DEFAULT NULL,
  `hargajual` int(11) DEFAULT NULL,
  `keterangan` varchar(200) DEFAULT NULL,
  `kategori` varchar(20) DEFAULT NULL,
  `satuan` varchar(20) NOT NULL,
  `terjual` int(10) DEFAULT NULL,
  `terbeli` int(11) DEFAULT NULL,
  `sisa` int(11) DEFAULT NULL,
  `stokmin` int(10) NOT NULL,
  `barcode` varchar(50) NOT NULL,
  `brand` text NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `expired` date NOT NULL,
  `warna` varchar(20) NOT NULL,
  `ukuran` varchar(10) NOT NULL,
  `avatar` varchar(300) NOT NULL,
  `no` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`kode`),
  KEY `no` (`no`),
  KEY `jenis` (`kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO barang VALUES("000001","SKU000001","Batu bata","0","0","","Bahan bangunan","Pcs","1","75","4641","1","BRG000001","Supreme","","0000-00-00","","","dist/upload/","1");
INSERT INTO barang VALUES("000002","SKU000002","Keramik","0","0","","Bahan bangunan","Pcs","0","263","734","1","BRG000002","Supreme","","0000-00-00","","","dist/upload/","2");
INSERT INTO barang VALUES("000003","SKU000003","Semen","0","0","","Bahan bangunan","Sak","0","18","92","1","BRG000003","Dua Roda","","0000-00-00","","","dist/upload/","3");



CREATE TABLE `brand` (
  `kode` varchar(20) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `no` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`kode`),
  KEY `no4` (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO brand VALUES("0001","Supreme","1");
INSERT INTO brand VALUES("0002","Dua Roda","2");



CREATE TABLE `chmenu` (
  `userjabatan` varchar(20) NOT NULL,
  `menu1` varchar(1) DEFAULT '0',
  `menu2` varchar(1) DEFAULT '0',
  `menu3` varchar(1) DEFAULT '0',
  `menu4` varchar(1) DEFAULT '0',
  `menu5` varchar(1) DEFAULT '0',
  `menu6` varchar(1) DEFAULT '0',
  `menu7` varchar(1) DEFAULT '0',
  `menu8` varchar(1) DEFAULT '0',
  `menu9` varchar(1) DEFAULT '0',
  `menu10` varchar(1) DEFAULT '0',
  `menu11` varchar(1) DEFAULT '0',
  PRIMARY KEY (`userjabatan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO chmenu VALUES("admin","5","5","5","5","5","5","5","5","5","5","5");
INSERT INTO chmenu VALUES("operator","0","3","2","2","2","5","5","1","5","0","");



CREATE TABLE `data` (
  `nama` varchar(100) DEFAULT NULL,
  `tagline` varchar(100) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `notelp` varchar(20) DEFAULT NULL,
  `signature` varchar(255) DEFAULT NULL,
  `avatar` varchar(150) DEFAULT NULL,
  `no` int(11) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO data VALUES("Code Null","","Jl. Nusantara  Indonesia","08123456789","Code Null","dist/upload/favicon.png","0");



CREATE TABLE `info` (
  `nama` varchar(50) DEFAULT NULL,
  `avatar` varchar(100) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO info VALUES("admin","dist/upload/index.jpg","2023-04-02","<h3>Halo Selamat datang</h3>","1");
INSERT INTO info VALUES("admin","dist/upload/index.jpg","2023-04-02","<h3>Halo Selamat datang</h3>","1");
INSERT INTO info VALUES("admin","dist/upload/index.jpg","2023-04-02","<h3>Halo Selamat datang</h3>","1");
INSERT INTO info VALUES("admin","dist/upload/index.jpg","2023-04-02","<h3>Halo Selamat datang</h3>","1");



CREATE TABLE `jabatan` (
  `kode` varchar(20) NOT NULL,
  `nama` varchar(20) DEFAULT NULL,
  `no` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`kode`),
  KEY `no` (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

INSERT INTO jabatan VALUES("0001","admin","35");
INSERT INTO jabatan VALUES("0002","operator","33");



CREATE TABLE `kategori` (
  `kode` varchar(20) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `no` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`kode`),
  KEY `no4` (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO kategori VALUES("0001","Bahan bangunan","1");



CREATE TABLE `mutasi` (
  `namauser` varchar(50) NOT NULL,
  `tgl` date NOT NULL,
  `kodebarang` varchar(10) NOT NULL,
  `sisa` int(10) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `kegiatan` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO mutasi VALUES("Admin","2023-04-02","000001","4642","75","stok masuk","0001","1","berhasil");
INSERT INTO mutasi VALUES("Admin","2023-04-02","000002","555","84","stok masuk","0001","2","berhasil");
INSERT INTO mutasi VALUES("Admin","2023-04-02","000001","4641","1","stok keluar","0001","3","berhasil");
INSERT INTO mutasi VALUES("admin","2023-04-02","000002","734","179","stok masuk","0002","4","berhasil");
INSERT INTO mutasi VALUES("admin","2023-04-02","000003","92","18","stok masuk","0002","5","berhasil");



CREATE TABLE `pelanggan` (
  `kode` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `notelp` varchar(20) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




CREATE TABLE `satuan` (
  `kode` varchar(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `no` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO satuan VALUES("0001","Pcs","1");
INSERT INTO satuan VALUES("0002","kategoria","3");
INSERT INTO satuan VALUES("0003","Sak","4");



CREATE TABLE `stok_keluar` (
  `nota` varchar(10) NOT NULL,
  `cabang` varchar(2) NOT NULL,
  `tgl` date NOT NULL,
  `pelanggan` varchar(100) NOT NULL,
  `userid` varchar(10) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `modal` int(10) NOT NULL,
  `total` int(10) NOT NULL,
  `no` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO stok_keluar VALUES("0001","01","2023-04-02","Asep","1","","0","0","1");



CREATE TABLE `stok_keluar_daftar` (
  `nota` varchar(10) NOT NULL,
  `kode_barang` varchar(10) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `subbeli` int(10) NOT NULL,
  `subtotal` int(10) NOT NULL,
  `no` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO stok_keluar_daftar VALUES("0001","000001","Batu bata","1","0","0","1");



CREATE TABLE `stok_masuk` (
  `nota` varchar(10) NOT NULL,
  `cabang` varchar(2) NOT NULL,
  `tgl` date NOT NULL,
  `supplier` varchar(100) NOT NULL,
  `userid` varchar(10) NOT NULL,
  `no` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO stok_masuk VALUES("0001","","2023-04-02","","1","1");
INSERT INTO stok_masuk VALUES("0002","","2023-04-02","","42","2");



CREATE TABLE `stok_masuk_daftar` (
  `nota` varchar(10) NOT NULL,
  `kode_barang` varchar(10) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `no` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO stok_masuk_daftar VALUES("0001","000001","Batu bata","75","1");
INSERT INTO stok_masuk_daftar VALUES("0001","000002","Keramik","84","2");
INSERT INTO stok_masuk_daftar VALUES("0002","000002","Keramik","179","3");
INSERT INTO stok_masuk_daftar VALUES("0002","000003","Semen","18","4");



CREATE TABLE `stok_sesuai` (
  `nota` varchar(10) NOT NULL,
  `tgl` date NOT NULL,
  `oleh` varchar(100) NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `no` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




CREATE TABLE `stok_sesuai_daftar` (
  `nota` varchar(10) NOT NULL,
  `kode_brg` varchar(10) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `sebelum` int(10) NOT NULL,
  `sesudah` int(10) NOT NULL,
  `selisih` int(10) NOT NULL,
  `catatan` varchar(100) NOT NULL,
  `no` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




CREATE TABLE `supplier` (
  `kode` varchar(20) NOT NULL,
  `tgldaftar` date DEFAULT NULL,
  `nama` varchar(25) DEFAULT NULL,
  `alamat` varchar(70) DEFAULT NULL,
  `nohp` varchar(20) DEFAULT NULL,
  `no` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`kode`),
  KEY `no3` (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




CREATE TABLE `surat` (
  `nota` varchar(10) NOT NULL,
  `nosurat` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `kode_pelanggan` varchar(10) NOT NULL,
  `tujuan` varchar(30) NOT NULL,
  `notelp` varchar(20) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `driver` varchar(20) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `nopol` varchar(10) NOT NULL,
  `oleh` varchar(50) NOT NULL,
  `no` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO surat VALUES("0001","SR0001","2023-04-02","Pilih Pela","Asep","0812345678","Bandung","Dadang","08548645634","","Admin","1");



CREATE TABLE `user` (
  `userna_me` varchar(20) NOT NULL,
  `pa_ssword` varchar(70) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `nohp` varchar(20) DEFAULT NULL,
  `tgllahir` date DEFAULT NULL,
  `tglaktif` date DEFAULT NULL,
  `jabatan` varchar(20) DEFAULT NULL,
  `avatar` varchar(100) DEFAULT NULL,
  `no` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`userna_me`),
  KEY `no` (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

INSERT INTO user VALUES("admin","90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad","admin","  admin","11111","2023-04-02","2020-03-26","admin","dist/upload/avatar-1.png","42");
INSERT INTO user VALUES("operator","e1eb39623dfa23bcf8c7b6fee2a17b85bc53da3e","Operator","Jakarta","0123456789","2023-04-02","2023-04-02","operator","dist/upload/avatar-1.png","46");

