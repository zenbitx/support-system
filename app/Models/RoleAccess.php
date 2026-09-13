<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RoleAccess extends Model
{
    use HasFactory;

    protected $table = 'role_access';

    public $timestamps = false;

    protected $primaryKey = null;

    public $incrementing = false;

    protected $fillable = [
        'pvid',
        'role_id',
        'res_id',
        'status',
    ];

    public function role(): BelongsTo
    {
        return $this->belongsTo(RoleList::class, 'role_id', 'role_id');
    }

    public function page(): BelongsTo
    {
        return $this->belongsTo(PageList::class, 'res_id', 'res_id');
    }
}
