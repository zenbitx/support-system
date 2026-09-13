<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AdminNote extends Model
{
    use HasFactory;

    protected $table = 'admin_note';

    public $timestamps = false;

    protected $fillable = [
        'ref_id',
        'ref_type',
        'user_id',
        'note',
        'entry_date',
    ];

    protected function casts(): array
    {
        return [
            'ref_id' => 'integer',
            'entry_date' => 'datetime',
        ];
    }

    public function ticket(): BelongsTo
    {
        return $this->belongsTo(Ticket::class, 'ref_id', 'id');
    }

    public function siteUser(): BelongsTo
    {
        return $this->belongsTo(SiteUser::class, 'ref_id', 'id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(AppUser::class, 'user_id', 'id');
    }
}
