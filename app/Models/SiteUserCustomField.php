<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SiteUserCustomField extends Model
{
    use HasFactory;

    protected $table = 'site_user_custom_field';

    public $timestamps = false;

    protected $fillable = [
        'user_id',
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
            'user_id' => 'integer',
        ];
    }

    public function siteUser(): BelongsTo
    {
        return $this->belongsTo(SiteUser::class, 'user_id', 'id');
    }

    public function customField(): BelongsTo
    {
        return $this->belongsTo(CustomField::class, 'custom_id', 'id');
    }
}
