<?php
require('../layout/header.php');
require('class.php');
$laporan = new Laporan();
?>

<div id="content">
<table class="my-4">
    <h1>Detail Laporan</h1>
    
        <?php $data_detail = $laporan->show($_GET['id']) ?>
        <tr>
            <td><b>ID Transaksi<B</td>
            <td>&nbsp;:</td>
            <td>&nbsp;KSR-<?= $data_detail['id'] ?></td>
        </tr>
        <tr>
            <td>Tanggal</td>
            <td>&nbsp;:</td>
            <td>&nbsp;<?= $data_detail['tanggal'] ?></td>
        </tr>
        <tr>
            <td>Nama Pelanggan</td>
            <td>&nbsp;:</td>
            <td>&nbsp;<?= $data_detail['nama_pelanggan'] ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>&nbsp;:</td>
            <td>&nbsp;<?= $data_detail['alamat_pelanggan'] ?></td>
        </tr>
        <tr>
            <td>No Telp</td>
            <td>&nbsp;:</td>
            <td>&nbsp;<?= $data_detail['no_telp'] ?></td>
        </tr>
        <tr>
            <td>Total Harga</td>
            <td>&nbsp;:</td>
            <td>&nbsp;Rp. <?= $data_detail['total_harga'] ?></td>
        </tr>
    </table>

    <div class="d-flex justify-content-end align-items-center">
        <form action="" method="post">
            <button tyoe="submit" name="cetak" class="btn btn-success">Cetak</button>
        </form>
    </div>
</div>

<?php
require('../layout/footer.php');

if (isset($_POST['cetak'])) {
    if (isset($_GET['id'])) {
        echo "<script> window.location.href = 'cetak.php?id=" . $_GET['id'] . "' </script>";
    } else {
        echo "<script> window.location.href = 'cetak.php' </script>";
    }
}
?>