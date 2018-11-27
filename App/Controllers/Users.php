<?php

namespace App\Controllers;

use App\Models\User;
use Core\View;

class Users {

    public function index()
    {
        View::render('user/index.php');
    }

    public function show()
    {
        $users = User::getAll();
        View::render('user/show.php', [
            'id' => 'Имя',
            'users' => $users
        ]);
    }


   /* public function create()
    {
        View::render('user/create.php');
    }*/ //пока не востребовано
}