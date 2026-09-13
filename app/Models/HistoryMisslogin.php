<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryMisslogin extends Model
{
    use HasFactory;

    protected $table = 'history_misslogin';

    public $timestamps = false;

    protected $primaryKey = null;

    public $incrementing = false;

    protected $fillable = [
        'user_id',
        'hit_date',
        'ip',
    ];

    protected function casts(): array
    {
        return [
            'hit_date' => 'datetime',
        ];
    }
}
