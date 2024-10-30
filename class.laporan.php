<?php 
include_once 'config.php';

class Laporan
{
    protected $db;

    public function __construct()
    {
        $this->db = new Database();
        $this->db = $this->db->return_db();
    }

    public function tampil()
    {
        $query = $this->db->prepare("SELECT * FROM penjualan");
        $query->execute();
        $hasil =  $query->get_result();
        return $hasil;
    }

    public function getidpenjualan($PenjualanID)
    {
        $query = $this->db->prepare("SELECT * FROM penjualan WHERE PenjualanID = '$PenjualanID'");
        $query->execute();
        $hasil =  $query->get_result();
        return $hasil;
    }

    public function detail_tampil($PenjualanID)
    {
    $query = $this->db->prepare("SELECT dp.PenjualanID as PenjualanID,
        penjualan.TanggalPenjualan as TanggalPenjualan,
        penjualan.TotalHarga,
        penjualan.PelangganID,
        dp.ProdukID as ProdukID, 
        produk.NamaProduk as NamaProduk,
        produk.Harga as Harga, 
        dp.JumlahProduk as JumlahProduk, 
        dp.Subtotal as Subtotal
        FROM detail_penjualan dp        
        JOIN penjualan ON dp.PenjualanID = penjualan.PenjualanID
        JOIN produk ON dp.ProdukID = produk.ProdukID
        WHERE dp.PenjualanID = '$PenjualanID'");


        $query->execute();
        $hasil =  $query->get_result();
        return $hasil;
    }

    public function tampil_tanggal($tglawal, $tglakhir)
    {
        $query = $this->db->prepare("SELECT * FROM penjualan WHERE TanggalPenjualan BETWEEN '$tglawal' AND '$tglakhir'");
        $query->execute();
        $hasil =  $query->get_result();
        return $hasil;
    }
}

?>