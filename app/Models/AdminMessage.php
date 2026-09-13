<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AdminMessage extends Model
{
    use HasFactory;

    protected $table = 'admin_message';

    public $timestamps = false;

    protected $fillable = [
        'subject',
        'body',
        'to_user',
        'from_user',
        'last_replied',
        'entry_time',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'entry_time' => 'datetime',
        ];
    }

    public function replies(): HasMany
    {
        return $this->hasMany(AdminMessageReply::class, 'msg_id', 'id');
    }

    public function toUser(): BelongsTo
    {
        return $this->belongsTo(AppUser::class, 'to_user', 'id');
    }

    public function fromUser(): BelongsTo
    {
        return $this->belongsTo(AppUser::class, 'from_user', 'id');
    }

    public function lastRepliedUser(): BelongsTo
    {
        return $this->belongsTo(AppUser::class, 'last_replied', 'id');
    }
}
