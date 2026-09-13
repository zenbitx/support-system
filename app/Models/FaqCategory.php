<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class FaqCategory extends Model
{
    use HasFactory;

    protected $table = 'faq_category';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'entry_date',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'entry_date' => 'datetime',
        ];
    }

    public function faqs(): HasMany
    {
        return $this->hasMany(FaqList::class, 'cat_id', 'id');
    }
}
