<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SaleFilePaymentLog extends Model
{
    use HasFactory;

    protected $table = 'sale_file_payment_log';

    public $timestamps = false;

    protected $primaryKey = null;

    public $incrementing = false;

    protected $fillable = [
        'payment_id',
        'user_id',
        'file_id',
        'amount_cr',
        'amount_dr',
        'first_2_digit',
        'last_4_digit',
        'transaction_id',
        'process_time',
        'transaction_time',
        'update_time',
        'result',
        'result_msg',
        'note',
        'response_reason',
        'status',
        'transation_type',
        'paid_by',
        'pp_payer_email',
        'name_on_card',
        'country',
        'approval_code',
        'ref_transaction_id',
    ];

    protected function casts(): array
    {
        return [
            'user_id' => 'integer',
            'file_id' => 'integer',
            'amount_cr' => 'decimal:2',
            'amount_dr' => 'decimal:2',
            'process_time' => 'datetime',
            'update_time' => 'datetime',
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

    public function saleUserFile(): BelongsTo
    {
        return $this->belongsTo(SaleUserFile::class, 'payment_id', 'payment_id');
    }
}
