<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SaleUserFile extends Model
{
    use HasFactory;

    protected $table = 'sale_user_file';

    public $timestamps = false;

    protected $fillable = [
        'dl_key',
        'payment_id',
        'user_id',
        'file_id',
        'rand_key',
        'valid_until',
        'entry_time',
    ];

    protected function casts(): array
    {
        return [
            'user_id' => 'integer',
            'file_id' => 'integer',
            'valid_until' => 'datetime',
            'entry_time' => 'datetime',
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(SiteUser::class, 'user_id', 'id');
    }

    public function file(): BelongsTo
    {
        return $this->belongsTo(SaleFile::class, 'file_id', 'id');
    }
}
