<?php

namespace App\Http\Controllers;

use App\Models\DailyMenu;
use Carbon\Carbon;

class DashboardController
{
    public function index()
    {
        $dailyMenu = DailyMenu::loadRelations()
            ->where('date', Carbon::now()->toDateString())
            ->first();
        return view('dashboard')->with(compact('dailyMenu'));
    }
}
