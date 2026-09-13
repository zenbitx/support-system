<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FaqList extends Model
{
    use HasFactory;

    protected $table = 'faq_list';

    public $timestamps = false;

    protected $fillable = [
        'cat_id',
        'question',
        'ans',
        'entry_date',
        'ord',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'cat_id' => 'integer',
            'entry_date' => 'datetime',
            'ord' => 'integer',
        ];
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(FaqCategory::class, 'cat_id', 'id');
    }
}
