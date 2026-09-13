<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageList extends Model
{
    use HasFactory;

    protected $table = 'page_list';

    public $timestamps = false;

    protected $primaryKey = 'res_id';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'res_id',
        'title',
        'controller_title',
        'directory',
        'controller',
        'method',
        'panel',
        'status',
    ];
}
