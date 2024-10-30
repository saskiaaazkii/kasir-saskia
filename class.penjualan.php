<?php 
include_once 'config.php';

class Penjualan {
    protected $db;

    public function __construct() {
        $this->db = new Database(); 
        $this->db = $this->db->return_db(); 
    }

    public function idauto($nextID) {
        $query = $this->db->prepare("SELECT MAX(PenjualanID) as terakhir FROM penjualan");
        $query->execute();
        $hasil = $query->get_result();
        $data = $hasil->fetch_assoc();
        $lastID = $data['terakhir'];
        $nextID = $lastID + 1;
        return $nextID;
    }

    public function input_produk($DetailID, $PenjualanID, $ProdukID, $JumlahProduk) {
        $query = $this->db->prepare("INSERT INTO detail_penjualan (DetailID, PenjualanID, ProdukID, JumlahProduk, Subtotal)
        SELECT NULL, ?, ?, ?, Harga * ? AS Subtotal
        FROM produk
        WHERE ProdukID = ?");
        $query->bind_param("iissi", $PenjualanID, $ProdukID, $JumlahProduk, $JumlahProduk, $ProdukID);
        $query->execute();

        $updateStokQuery = $this->db->prepare("UPDATE produk SET Stok = Stok - ? WHERE ProdukID = ?");
        $updateStokQuery->bind_param("ii", $JumlahProduk, $ProdukID);
        $updateStokQuery->execute();

        return true;
    }

    public function tampil_detail_produk() {
        $query = $this->db->prepare("SELECT dp.ProdukID, p.NamaProduk, dp.JumlahProduk, p.Harga, dp.Subtotal 
        FROM detail_penjualan dp
        JOIN produk p ON dp.ProdukID = p.ProdukID
        WHERE dp.PenjualanID > (SELECT MAX(PenjualanID) FROM penjualan)");
        
        $query->execute();
        $hasil =  $query->get_result();
        return $hasil;
    }

    public function input_penjualan($PenjualanID, $TanggalPenjualan, $TotalHarga, $PelangganID) {
        $query =  $this->db->prepare("INSERT INTO penjualan VALUES(?, ?, ?, ?)");
        $query->bind_param("ssss", $PenjualanID, $TanggalPenjualan, $TotalHarga, $PelangganID);
        $query->execute();
        return true;
    }

    public function hapus_detail($ProdukID, $PenjualanID) {
        $query = $this->db->prepare("DELETE FROM detail_penjualan WHERE ProdukID = ? AND PenjualanID = ?");
        $query->bind_param("ii", $ProdukID, $PenjualanID);
        $query->execute();
        return true;
    }

    public function getJumlahProduk($ProdukID, $PenjualanID) {
        $query = $this->db->prepare("SELECT JumlahProduk FROM detail_penjualan WHERE ProdukID = ? AND PenjualanID = ?");
        $query->bind_param("ii", $ProdukID, $PenjualanID);
        $query->execute();
        $hasil = $query->get_result();
        $data = $hasil->fetch_assoc();
        return $data['JumlahProduk'];
    }

    public function kembalikanStokProduk($ProdukID, $jumlahProduk) {
        $query = $this->db->prepare("UPDATE produk SET Stok = Stok + ? WHERE ProdukID = ?");
        $query->bind_param("ii", $jumlahProduk, $ProdukID);
        $query->execute();
        return true;
    }
}
?>
