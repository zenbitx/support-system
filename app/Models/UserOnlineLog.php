<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserOnlineLog extends Model
{
    use HasFactory;

    protected $table = 'user_online_log';

    public $timestamps = false;

    protected $primaryKey = 'user_id';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'user_id',
        'u_type',
        'last_time',
    ];

    protected function casts(): array
    {
        return [
            'last_time' => 'datetime',
        ];
    }
}
