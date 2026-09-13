<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    use HasFactory;

    protected $table = 'notice';

    public $timestamps = false;

    protected $fillable = [
        'title',
        'msg',
        'start_date',
        'end_date',
        'msg_for',
        'added_by',
        'added_on',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'start_date' => 'date',
            'end_date' => 'date',
            'added_on' => 'datetime',
        ];
    }
}
