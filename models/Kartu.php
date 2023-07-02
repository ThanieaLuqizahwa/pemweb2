<?php
class Kartu{

    private $koneksi;

    public function __construct(){
        global $dbh; //panggil instance object di koneksi.php
        $this->koneksi = $dbh;
    }

    public function dataKartu(){
        $sql = "SELECT c. *, j.nama AS prod
        FROM produk c
        INNER JOIN jenis_produk j ON j.id = c.jenis_produk_id
        ORDER BY c.id DESC";

        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
}
?>