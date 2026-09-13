<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AppNotificaiton extends Model
{
    use HasFactory;

    protected $table = 'app_notificaiton';

    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'title',
        'msg',
        'entry_type',
        'entry_link',
        'n_counter',
        'is_popup_link',
        'view_time',
        'entry_time',
        'item_type',
        'extra_param',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'n_counter' => 'decimal:0',
            'view_time' => 'datetime',
            'entry_time' => 'datetime',
        ];
    }

    public function appUser(): BelongsTo
    {
        return $this->belongsTo(AppUser::class, 'user_id', 'id');
    }

    public function siteUser(): BelongsTo
    {
        return $this->belongsTo(SiteUser::class, 'user_id', 'id');
    }
}
