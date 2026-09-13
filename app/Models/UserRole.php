<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UserRole extends Model
{
    use HasFactory;

    protected $table = 'user_role';

    public $timestamps = false;

    protected $primaryKey = null;

    public $incrementing = false;

    protected $fillable = [
        'pvid',
        'role_id',
        'title',
        'status',
    ];

    public function appUsers(): HasMany
    {
        return $this->hasMany(AppUser::class, 'role', 'role_id');
    }
}
