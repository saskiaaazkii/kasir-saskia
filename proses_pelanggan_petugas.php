<?php 
session_start();
include '../function/class.Pelanggan.php';

$pelanggan = new Pelanggan();

$aksi = $_GET['aksi'];

if ($aksi == "simpan") {
    $pelanggan->input(
        $_POST['PelangganID'],
        $_POST['NamaPelanggan'],
        $_POST['Alamat'],
        $_POST['NomorTelepon']
    );
    header("location:../petugas.php?page=pelanggan_petugas");
}

if ($aksi == "update") {
    $pelanggan->update(
        $_POST['PelangganID'],
        $_POST['NamaPelanggan'],
        $_POST['Alamat'],
        $_POST['NomorTelepon']
    );
    header("location:../petugas.php?page=pelanggan_petugas");
}

if ($aksi == "hapus") {
    $pelanggan->hapus($_GET['PelangganID']);
    header("location:../petugas.php?page=pelanggan_petugas");
}
?>