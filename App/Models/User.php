<?php

namespace App\Models;

use Core\Model;

class User extends Model {
    public static function getAll() {
        $db = Model::getDB();
        $result = $db->query('SELECT * FROM user');
        return $result;
    }
}
