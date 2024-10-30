<!DOCTYPE html>
<html lang="en">
<head>
    <title>KASIR</title>
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
        <a href="admin.php" class="btn btn-success mx-2">Beranda</a>
        <a href="admin.php?page=user" class="btn btn-success mx-2 ">User</a>
        <a href="admin.php?page=produk" class="btn btn-success mx-2">Produk</a>
        <a href="admin.php?page=pelanggan" class="btn btn-success mx-2">Pelanggan</a>
        <a href="admin.php?page=penjualan" class="btn btn-success mx-2">Penjualan</a>
        <a href="admin.php?page=laporan" class="btn btn-warning mx-2">Laporan</a>    
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
                case 'user':
                    include 'page/user.php';
                    break;
                case 'edit_user':
                    include 'page/edit_user.php';
                    break;
                case 'produk':
                    include 'page/produk.php';
                    break;
                case 'edit_produk':
                    include 'page/edit_produk.php';
                    break;                
                case 'pelanggan':
                    include 'page/pelanggan.php';
                    break;
                case 'edit_pelanggan':
                    include 'page/edit_pelanggan.php';
                    break;
                case 'penjualan':
                    include 'page/penjualan.php';
                    break;
                case 'penjualan_detail':
                    include 'page/penjualan_detail.php';
                    break;
                case 'laporan':
                    include 'page/laporan.php';
                    break;
                case 'detail_penjualan':
                    include 'page/detail_penjualan.php';
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



