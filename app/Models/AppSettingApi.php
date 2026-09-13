<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppSettingApi extends Model
{
    use HasFactory;

    protected $table = 'app_setting_api';

    public $timestamps = false;

    protected $primaryKey = null;

    public $incrementing = false;

    protected $fillable = [
        's_api_name',
        's_key',
        's_title',
        's_val',
        's_type',
        's_option',
        's_auto_load',
    ];
}
