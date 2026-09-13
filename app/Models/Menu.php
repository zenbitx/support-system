<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Menu extends Model
{
    use HasFactory;

    protected $table = 'menu';

    public $timestamps = false;

    protected $fillable = [
        'parent_id',
        'title',
        'href_type',
        'href',
        'text_icon',
        'view_counter',
        'is_new_window',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'parent_id' => 'integer',
            'view_counter' => 'integer',
        ];
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(Menu::class, 'parent_id', 'id');
    }

    public function children(): HasMany
    {
        return $this->hasMany(Menu::class, 'parent_id', 'id');
    }
}
