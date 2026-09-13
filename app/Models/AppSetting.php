<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppSetting extends Model
{
    use HasFactory;

    protected $table = 'app_setting';

    public $timestamps = false;

    protected $primaryKey = 's_key';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        's_key',
        's_title',
        's_val',
        's_type',
        's_option',
        's_auto_load',
    ];
}
