<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Knowledge extends Model
{
    use HasFactory;

    protected $table = 'knowledge';

    public $timestamps = false;

    protected $fillable = [
        'slug_id',
        'cat_id',
        'title',
        'k_body',
        'v_count',
        'l_count',
        'd_count',
        'is_stickey',
        'added_by',
        'k_tag',
        'k_soundex',
        'entry_time',
        'featured_video_link',
        'last_update_time',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'cat_id' => 'integer',
            'v_count' => 'integer',
            'l_count' => 'integer',
            'd_count' => 'integer',
            'entry_time' => 'datetime',
            'last_update_time' => 'datetime',
        ];
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'cat_id', 'id');
    }

    public function addedByUser(): BelongsTo
    {
        return $this->belongsTo(AppUser::class, 'added_by', 'id');
    }
}
