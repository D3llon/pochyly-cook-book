<?php

namespace App\Http\Controllers;

use App\Models\DailyMenu;
use Illuminate\Http\Request;

class MenuController extends Controller
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

    public function add()
    {
        return view('menu.add');
    }

    public function store(Request $request)
    {
        $fields = ['date', 'main_course_id', 'soup_id', 'side_dish_id', 'salad_id'];
        $data = $request->only($fields);
        foreach ($fields as $field) {
            if (isset($data[$field])) {

            }
        }
        dd($data);
    }
}
