<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SystemMsg extends Model
{
    use HasFactory;

    protected $table = 'system_msg';

    public $timestamps = false;

    protected $fillable = [
        'tag',
        'title',
        'msg',
        'is_sup',
        'added_on',
        'added_by',
        'msg_type',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'added_on' => 'datetime',
        ];
    }
}
