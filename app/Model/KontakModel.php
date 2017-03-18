<?php

namespace Mvc\Model;

use Mvc\Core\Database;

class KontakModel
{
    public static function simpan($nama, $telp, $pesan)
    {
        try {
            $sql_insert = "INSERT INTO `kontak` (`nama`,`telp`,`pesan`) VALUES (?,?,?)";
            $query = Database::$pdo->prepare($sql_insert);
            $query->bindParam(1, $nama);
            $query->bindParam(2, $telp);
            $query->bindParam(3, $pesan);
            $query->execute();

            $hasil = "Terima kasih telah mengontak kami";

        } catch(\PDOException $e){
            $hasil = "Gagal mengontak karena: ".$e->getMessage();
        }

        return $hasil;
    }
}

