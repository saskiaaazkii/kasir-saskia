<!DOCTYPE html>
<html lang="en">
<head>
    <title>Petugas</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
<center>
        <div class="jumbotron">
            <h1 class="display-4"><b>Aplikasi Kasir</b></h1>
        </div>
    </center>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container mt-3 ">
    <div class="d-flex justify-content-between align-items-start rounded border p-3 ">
        <a href="petugas.php" class="btn btn-success mx-2">Beranda</a>
        <a href="petugas.php?page=produk_petugas" class="btn btn-success mx-2">Produk</a>
        <a href="petugas.php?page=pelanggan_petugas" class="btn btn-success mx-2">Pelanggan</a>
        <a href="petugas.php?page=penjualan_petugas" class="btn btn-success mx-2">Penjualan</a>
        <a href="petugas.php?page=laporan_petugas" class="btn btn-warning mx-2">Laporan</a>    
        <a href="index.php?logout=logout" class="btn btn-danger ml-auto">Logout</a>
        </div>
        <div class="border rounded mt-2 ">
    </nav>

<center>
    <div>
        <?php 
        if (isset($_GET['page'])) {

            $page = $_GET['page'];
            switch ($page) {
                case 'produk_petugas':
                    include 'page/produk_petugas.php';
                    break;
                case 'edit_produk_petugas':
                    include 'page/edit_produk_petugas.php';
                    break;
                    case 'pelanggan_petugas':
                        include 'page/pelanggan_petugas.php';
                        break;
                    case 'edit_pelanggan_petugas':
                        include 'page/edit_pelanggan_petugas.php';
                        break;
                    case 'penjualan_petugas':
                        include 'page/penjualan_petugas.php';
                        break;
                    case 'penjualan_detail':
                        include 'page/penjualan_detail.php';
                        break;  
                case 'laporan_petugas':
                    include 'page/laporan_petugas.php';
                    break;
                    case 'detail_penjualan_petugas':
                        include 'page/detail_penjualan_petugas.php';
                        break;
                        case 'logout':
                            include 'page/logout.php';
                            break;
                default:
                    break;
            }
        }
        ?>
    </div>
</center>

<div class="container mt-3 ">
    <div class="d-flex justify-content-center align-items-start rounded border py-3 ">
    <b>Kasir Saskia Azki Fladea</b>
    
</body>
</html>