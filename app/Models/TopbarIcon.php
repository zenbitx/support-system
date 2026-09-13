<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopbarIcon extends Model
{
    use HasFactory;

    protected $table = 'topbar_icon';

    public $timestamps = false;

    protected $fillable = [
        'title',
        'sub_title',
        'icon_class',
        'icon_order',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'icon_order' => 'integer',
        ];
    }
}
