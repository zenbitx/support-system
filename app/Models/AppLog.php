<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AppLog extends Model
{
    use HasFactory;

    protected $table = 'app_log';

    public $timestamps = false;

    protected $primaryKey = null;

    public $incrementing = false;

    protected $fillable = [
        'user_id',
        'user_type',
        'user_role',
        'changed_page',
        'changed_type',
        'changed_value',
        'msg_code',
        'msg_param',
        'ip',
        'date_time',
        'tag',
        'member_id',
        'agent_id',
    ];

    protected function casts(): array
    {
        return [
            'date_time' => 'datetime',
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(AppUser::class, 'user_id', 'id');
    }

    public function member(): BelongsTo
    {
        return $this->belongsTo(AppUser::class, 'member_id', 'id');
    }

    public function agent(): BelongsTo
    {
        return $this->belongsTo(AppUser::class, 'agent_id', 'id');
    }

    public function siteUser(): BelongsTo
    {
        return $this->belongsTo(SiteUser::class, 'user_id', 'id');
    }
}
