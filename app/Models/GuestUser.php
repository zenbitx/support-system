<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuestUser extends Model
{
    use HasFactory;

    protected $table = 'guest_user';

    public $timestamps = false;

    protected $fillable = [
        'first_name',
        'last_name',
        'username',
        'email',
        'pass',
        'is_verified_email',
        'gender',
        'phone',
        'address',
        'region',
        'city',
        'zip',
        'country',
        'dob',
        'profile_url',
        'photo_url',
        'age',
        'login_type',
        'join_date',
        'tzone',
        'last_login_time',
        'status',
        'user_social_session_data',
    ];

    protected function casts(): array
    {
        return [
            'age' => 'decimal:0',
            'join_date' => 'datetime',
            'last_login_time' => 'datetime',
        ];
    }
}
