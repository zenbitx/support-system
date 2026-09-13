<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DebugLog extends Model
{
    use HasFactory;

    protected $table = 'debug_log';

    public $timestamps = false;

    protected $fillable = [
        'entry_type',
        'log_type',
        'title',
        'log_data',
        'status',
        'entry_time',
    ];

    protected function casts(): array
    {
        return [
            'id' => 'integer',
            'entry_time' => 'datetime',
        ];
    }
}
