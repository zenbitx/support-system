<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SiteUser extends Model
{
    use HasFactory;

    protected $table = 'site_user';

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
        'user_type',
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

    public function tickets(): HasMany
    {
        return $this->hasMany(Ticket::class, 'ticket_user', 'id');
    }

    public function customFields(): HasMany
    {
        return $this->hasMany(SiteUserCustomField::class, 'user_id', 'id');
    }

    public function saleUserFiles(): HasMany
    {
        return $this->hasMany(SaleUserFile::class, 'user_id', 'id');
    }

    public function saleFilePaymentLogs(): HasMany
    {
        return $this->hasMany(SaleFilePaymentLog::class, 'user_id', 'id');
    }

    public function notifications(): HasMany
    {
        return $this->hasMany(AppNotificaiton::class, 'user_id', 'id');
    }

    public function chats(): HasMany
    {
        return $this->hasMany(Chat::class, 'open_user_id', 'id');
    }
}
