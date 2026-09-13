<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ChatDenied extends Model
{
    use HasFactory;

    protected $table = 'chat_denied';

    public $timestamps = false;

    protected $fillable = [
        'chat_id',
        'app_user_id',
        'entry_time',
    ];

    protected function casts(): array
    {
        return [
            'id' => 'integer',
            'chat_id' => 'integer',
            'entry_time' => 'datetime',
        ];
    }

    public function chat(): BelongsTo
    {
        return $this->belongsTo(Chat::class, 'chat_id', 'id');
    }

    public function appUser(): BelongsTo
    {
        return $this->belongsTo(AppUser::class, 'app_user_id', 'id');
    }
}
