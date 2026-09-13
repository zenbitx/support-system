<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iplist extends Model
{
    use HasFactory;

    protected $table = 'iplist';

    public $timestamps = false;

    protected $primaryKey = 'ip';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'ip',
        'added_on',
        'start_count_time',
        'req_counter',
        'entry_type',
        'country_code',
        'status',
        'h_at_count',
    ];

    protected function casts(): array
    {
        return [
            'added_on' => 'datetime',
            'start_count_time' => 'datetime',
            'req_counter' => 'decimal:0',
            'h_at_count' => 'decimal:0',
        ];
    }
}
