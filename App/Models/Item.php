<?php

namespace App\Models;

use Core\Model;


class Item extends Model {
    public static function getAll() {
        $db = Model::getDB();
        $result = $db->query('SELECT * FROM products');
        return $result;
    }

    public static function getId () {
        $db = Model::getDB();
        $result = $db->query('SELECT * FROM products WHERE id = 1');
        return $result;
    }

}

