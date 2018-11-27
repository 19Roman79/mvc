<?php

namespace App\Controllers;

use App\Models\Item;
use Core\View;

class Items
{

    public function index()
    {
        View::render('item/index.php');
    }

    public function show()
    {
        $name_cat = Item::getAll();
        $cat_id = Item::getId();
        View::render('item/show.php', [
            'cat' => 'Товары',
            'name_cat' => $name_cat,
            'cat_id' => $cat_id
        ]);
    }


}