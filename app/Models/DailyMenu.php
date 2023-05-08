<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DailyMenu extends Model
{
    protected $guarded = ['id'];

    public function mainCourse(): BelongsTo
    {
        return $this->belongsTo(MainCourse::class);
    }

    public function soup(): BelongsTo
    {
        return $this->belongsTo(Soup::class);
    }

    public function sideDish(): BelongsTo
    {
        return $this->belongsTo(SideDish::class);
    }

    public function salad(): BelongsTo
    {
        return $this->belongsTo(Salad::class);
    }

    public function cook(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function scopeLoadRelations($q)
    {
        return $q->with(['mainCourse', 'sideDish', 'soup', 'salad', 'cook']);
    }
}
