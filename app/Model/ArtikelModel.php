<?php

namespace Mvc\Model;

use Mvc\Core\Database;

class ArtikelModel
{
    public static function all()
    {
        $sql = "SELECT * FROM `artikel` ORDER BY `id` DESC";
        $q = Database::$pdo->prepare($sql);
        $q->execute();
        $row = $q->fetchAll();
        return $row;
    }

    public static function one($id)
    {
        $id = filter_var($id, FILTER_VALIDATE_INT);
        $sql = "SELECT * FROM `artikel` WHERE `id` = ?";
        $q = Database::$pdo->prepare($sql);
        $q->execute(array($id));
        $row = $q->fetch();
        return $row;
    }

    public static function latest()
    {
        $sql_select = "SELECT * FROM `artikel` ORDER BY `id` DESC LIMIT 0,1";
        $q = Database::$pdo->prepare($sql_select);
        $q->execute();
        $row = $q->fetch();
        return $row;
    }

    public static function other($id)
    {
        $sql_select = "SELECT * FROM `artikel` WHERE `id` != ? ORDER BY `id` DESC LIMIT 0,2";
        $q = Database::$pdo->prepare($sql_select);
        $q->execute(array($id));
        $row = $q->fetchAll();
        return $row;
    }
}

