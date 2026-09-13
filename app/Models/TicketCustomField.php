<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TicketCustomField extends Model
{
    use HasFactory;

    protected $table = 'ticket_custom_field';

    public $timestamps = false;

    protected $fillable = [
        'ticket_id',
        'custom_id',
        'fld_title',
        'fld_type',
        'fld_value',
        'fld_value_text',
        'is_api_based',
        'api_name',
        'api_data',
    ];

    protected function casts(): array
    {
        return [
            'ticket_id' => 'integer',
        ];
    }

    public function ticket(): BelongsTo
    {
        return $this->belongsTo(Ticket::class, 'ticket_id', 'id');
    }

    public function customField(): BelongsTo
    {
        return $this->belongsTo(CustomField::class, 'custom_id', 'id');
    }
}
