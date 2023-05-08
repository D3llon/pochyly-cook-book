<?php

namespace App\Http\Controllers;

use App\Models\DailyMenu;

class MenuController
{
    public function index()
    {
        $menus = DailyMenu::loadRelations()
            ->limit(15)
            ->get();

        return view('menu.index')->with([
            'menus' => $menus
        ]);
    }
}
