<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AppUser extends Model
{
    use HasFactory;

    protected $table = 'app_user';

    public $timestamps = false;

    protected $primaryKey = 'user';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'pvid',
        'id',
        'user',
        'title',
        'email',
        'pass',
        'role',
        'panel',
        'status',
        'add_date',
        'contact_number',
        'img_url',
        'tzone',
        'gender',
        'address',
        'region',
        'city',
        'zip',
        'country',
        'dob',
        'is_enable_chat',
    ];

    protected function casts(): array
    {
        return [
            'add_date' => 'datetime',
        ];
    }

    public function roleList(): BelongsTo
    {
        return $this->belongsTo(RoleList::class, 'role', 'role_id');
    }

    public function userRole(): BelongsTo
    {
        return $this->belongsTo(UserRole::class, 'role', 'role_id');
    }

    public function sentAdminMessages(): HasMany
    {
        return $this->hasMany(AdminMessage::class, 'from_user', 'id');
    }

    public function receivedAdminMessages(): HasMany
    {
        return $this->hasMany(AdminMessage::class, 'to_user', 'id');
    }

    public function adminMessageReplies(): HasMany
    {
        return $this->hasMany(AdminMessageReply::class, 'replied_by', 'id');
    }

    public function assignedTickets(): HasMany
    {
        return $this->hasMany(Ticket::class, 'assigned_on', 'id');
    }

    public function knowledgeArticles(): HasMany
    {
        return $this->hasMany(Knowledge::class, 'added_by', 'id');
    }

    public function cannedMessages(): HasMany
    {
        return $this->hasMany(CannedMsg::class, 'user_id', 'id');
    }

    public function workLogs(): HasMany
    {
        return $this->hasMany(WorkLog::class, 'user_id', 'id');
    }
}
