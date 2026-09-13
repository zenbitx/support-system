<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ChatMsg extends Model
{
    use HasFactory;

    protected $table = 'chat_msg';

    public $timestamps = false;

    protected $primaryKey = null;

    public $incrementing = false;

    protected $fillable = [
        'chat_id',
        'msg_id',
        'temp_id',
        'reply_user_type',
        'reply_user_id',
        'msg',
        'form_id',
        'entry_time',
    ];

    protected function casts(): array
    {
        return [
            'chat_id' => 'integer',
            'entry_time' => 'datetime',
        ];
    }

    public function chat(): BelongsTo
    {
        return $this->belongsTo(Chat::class, 'chat_id', 'id');
    }

    public function replyAppUser(): BelongsTo
    {
        return $this->belongsTo(AppUser::class, 'reply_user_id', 'id');
    }

    public function replySiteUser(): BelongsTo
    {
        return $this->belongsTo(SiteUser::class, 'reply_user_id', 'id');
    }
}
