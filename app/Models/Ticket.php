<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Ticket extends Model
{
    use HasFactory;

    protected $table = 'ticket';

    public $timestamps = false;

    protected $fillable = [
        'ticket_track_id',
        'cat_id',
        'title',
        'ticket_body',
        'ticket_user',
        'opened_time',
        're_open_time',
        're_open_by',
        're_open_by_type',
        'user_type',
        'status',
        'assigned_on',
        'assigned_date',
        'last_replied_by',
        'last_replied_by_type',
        'last_reply_time',
        'last_c_reply',
        'ticket_rating',
        'priroty',
        'is_public',
        'is_open_using_email',
        'is_paid_ticket',
        'reply_counter',
        'is_user_seen_last_reply',
    ];

    protected function casts(): array
    {
        return [
            'opened_time' => 'datetime',
            're_open_time' => 'datetime',
            'assigned_date' => 'datetime',
            'last_reply_time' => 'datetime',
            'last_c_reply' => 'datetime',
            'ticket_rating' => 'decimal:0',
            'reply_counter' => 'integer',
        ];
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'cat_id', 'id');
    }

    public function siteUser(): BelongsTo
    {
        return $this->belongsTo(SiteUser::class, 'ticket_user', 'id');
    }

    public function guestUser(): BelongsTo
    {
        return $this->belongsTo(GuestUser::class, 'ticket_user', 'id');
    }

    public function assignedUser(): BelongsTo
    {
        return $this->belongsTo(AppUser::class, 'assigned_on', 'id');
    }

    public function lastRepliedUser(): BelongsTo
    {
        return $this->belongsTo(AppUser::class, 'last_replied_by', 'id');
    }

    public function replies(): HasMany
    {
        return $this->hasMany(TicketReply::class, 'ticket_id', 'id');
    }

    public function logs(): HasMany
    {
        return $this->hasMany(TicketLog::class, 'ticket_id', 'id');
    }

    public function meta(): HasMany
    {
        return $this->hasMany(TicketMeta::class, 'ticket_id', 'id');
    }

    public function customFields(): HasMany
    {
        return $this->hasMany(TicketCustomField::class, 'ticket_id', 'id');
    }

    public function feedback(): HasOne
    {
        return $this->hasOne(TicketFeedback::class, 'ticket_id', 'id');
    }

    public function payments(): HasMany
    {
        return $this->hasMany(TicketPayment::class, 'ticket_id', 'id');
    }

    public function workLogs(): HasMany
    {
        return $this->hasMany(WorkLog::class, 'ticket_id', 'id');
    }

    public function adminNotes(): HasMany
    {
        return $this->hasMany(AdminNote::class, 'ref_id', 'id');
    }
}
