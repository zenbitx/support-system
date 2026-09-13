<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CustomField extends Model
{
    use HasFactory;

    protected $table = 'custom_field';

    public $timestamps = false;

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'cat_id',
        'title',
        'help_text',
        'type',
        'opt_json_base',
        'is_required',
        'default_value',
        'is_api_based',
        'is_private',
        'is_on_grid',
        'api_name',
        'on_submit_api_check',
        'status',
        'fld_order',
    ];

    protected function casts(): array
    {
        return [
            'fld_order' => 'integer',
        ];
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'cat_id', 'id');
    }

    public function ticketCustomFields(): HasMany
    {
        return $this->hasMany(TicketCustomField::class, 'custom_id', 'id');
    }

    public function siteUserCustomFields(): HasMany
    {
        return $this->hasMany(SiteUserCustomField::class, 'custom_id', 'id');
    }
}
