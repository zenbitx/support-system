<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AdminMessageReply extends Model
{
    use HasFactory;

    protected $table = 'admin_message_reply';

    public $timestamps = false;

    protected $fillable = [
        'msg_id',
        'reply_text',
        'replied_by',
        'entry_time',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'msg_id' => 'integer',
            'entry_time' => 'datetime',
        ];
    }

    public function message(): BelongsTo
    {
        return $this->belongsTo(AdminMessage::class, 'msg_id', 'id');
    }

    public function repliedByUser(): BelongsTo
    {
        return $this->belongsTo(AppUser::class, 'replied_by', 'id');
    }
}
