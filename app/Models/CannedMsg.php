<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CannedMsg extends Model
{
    use HasFactory;

    protected $table = 'canned_msg';

    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'title',
        'canned_msg',
        'entry_date',
        'added_by',
        'canned_type',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'entry_date' => 'datetime',
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(AppUser::class, 'user_id', 'id');
    }

    public function addedByUser(): BelongsTo
    {
        return $this->belongsTo(AppUser::class, 'added_by', 'id');
    }
}
