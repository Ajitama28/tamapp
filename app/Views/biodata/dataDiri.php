<?= $this->extend('layout/layoutBiodata'); ?>

<?= $this->section('content'); ?>
<?php
// Data KTP
$nama = "Mina";
$nik = "20151007";
$tempat_lahir = "Jepang";
$tanggal_lahir = "24 Maret 1997";
$jenis_kelamin = "Perempuan";
$alamat = "San Antonio, Texas, A.S";
$rt_rw = "001/011";
$kelurahan = "San Antonio";
$kecamatan = "Texas";
$agama = "Katolik";
$kewarganegaraan = "Warga Negara Asing";
?>

<div class="container">
    <h2>KARTU TANDA PENDUDUK</h2>
    <div class="row">
        <div class="col-sm-8">
            <span class="label">Nama</span>:
            <?php echo $nama; ?><br>
            <span class="label">NIK</span>:
            <?php echo $nik; ?><br>
            <span class="label">Tempat/Tgl Lahir</span>:
            <?php echo $tempat_lahir . ", " . $tanggal_lahir; ?><br>
            <span class="label">Jenis Kelamin</span>:
            <?php echo $jenis_kelamin; ?><br>
            <span class="label">Alamat</span>:
            <?php echo $alamat; ?><br>
            <span class="label">RT/RW</span>:
            <?php echo $rt_rw; ?><br>
            <span class="label">Kelurahan</span>:
            <?php echo $kelurahan; ?><br>
            <span class="label">Kecamatan</span>:
            <?php echo $kecamatan; ?><br>
            <span class="label">Agama</span>:
            <?php echo $agama; ?><br>
        </div>
        <div class="col-sm-1">
            <img src="imgBiodata/Mina.JPG" alt="Foto KTP" width="150px" border="3">
        </div>
    </div>
    <?= $this->endSection(); ?>