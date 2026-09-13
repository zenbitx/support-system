<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Chat extends Model
{
    use HasFactory;

    protected $table = 'chat';

    public $timestamps = false;

    protected $fillable = [
        'open_user_id',
        'is_remote_typing',
        'is_user_typing',
        'end_by_type',
        'end_by',
        'current_admin_user',
        'start_time',
        'end_time',
        'bw_name',
        'country',
        'last_msg_time',
        'last_msg_by',
        'last_page_list',
        'ip',
        'header_msg',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'start_time' => 'datetime',
            'end_time' => 'datetime',
            'last_msg_time' => 'datetime',
        ];
    }

    public function siteUser(): BelongsTo
    {
        return $this->belongsTo(SiteUser::class, 'open_user_id', 'id');
    }

    public function currentAdminUser(): BelongsTo
    {
        return $this->belongsTo(AppUser::class, 'current_admin_user', 'id');
    }

    public function messages(): HasMany
    {
        return $this->hasMany(ChatMsg::class, 'chat_id', 'id');
    }

    public function deniedEntries(): HasMany
    {
        return $this->hasMany(ChatDenied::class, 'chat_id', 'id');
    }
}
