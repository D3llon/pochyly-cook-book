<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Salad extends Model
{
    protected $guarded = ['id'];

    public function dailyMenus(): HasMany
    {
        return $this->hasMany(DailyMenu::class);
    }
}
