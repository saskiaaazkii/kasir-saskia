<?php 
session_start();
include '../function/class.penjualan.php';

$penjualan = new Penjualan();

$aksi = $_GET['aksi'];

if ($aksi == "hapus") {
    $penjualan->hapus_detail($_GET['ProdukID'], $_GET['PenjualanID']);
    header("location:../admin.php?page=penjualan");
}