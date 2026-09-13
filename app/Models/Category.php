<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    protected $table = 'category';

    public $timestamps = false;

    protected $fillable = [
        'title',
        'parent_category',
        'parent_category_path',
        'show_on',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'parent_category' => 'integer',
        ];
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'parent_category', 'id');
    }

    public function children(): HasMany
    {
        return $this->hasMany(Category::class, 'parent_category', 'id');
    }

    public function knowledgeArticles(): HasMany
    {
        return $this->hasMany(Knowledge::class, 'cat_id', 'id');
    }

    public function tickets(): HasMany
    {
        return $this->hasMany(Ticket::class, 'cat_id', 'id');
    }

    public function customFields(): HasMany
    {
        return $this->hasMany(CustomField::class, 'cat_id', 'id');
    }
}
