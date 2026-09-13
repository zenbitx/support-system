<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomPage extends Model
{
    use HasFactory;

    protected $table = 'custom_page';

    public $timestamps = false;

    protected $fillable = [
        'slag_title',
        'title',
        'page_body',
        'added_on',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'added_on' => 'datetime',
        ];
    }
}
