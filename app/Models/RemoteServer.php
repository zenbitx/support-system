<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RemoteServer extends Model
{
    use HasFactory;

    protected $table = 'remote_server';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'private_key',
        'login_url',
        'valid_url',
        'button_text_color',
        'button_color',
        'button_txt',
        'server_type',
        'status',
    ];
}
