<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SaleFile extends Model
{
    use HasFactory;

    protected $table = 'sale_file';

    public $timestamps = false;

    protected $fillable = [
        'key_rand',
        'extn',
        'file_name',
        'description',
        'update_date',
        'is_paid',
        'amount',
        'total_sold',
        'hour_of_avaiable',
        'has_expiry',
        'expiry_date',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'update_date' => 'datetime',
            'amount' => 'decimal:2',
            'total_sold' => 'integer',
            'hour_of_avaiable' => 'integer',
            'expiry_date' => 'datetime',
        ];
    }

    public function userFiles(): HasMany
    {
        return $this->hasMany(SaleUserFile::class, 'file_id', 'id');
    }

    public function paymentLogs(): HasMany
    {
        return $this->hasMany(SaleFilePaymentLog::class, 'file_id', 'id');
    }
}
