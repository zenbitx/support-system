<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class RoleList extends Model
{
    use HasFactory;

    protected $table = 'role_list';

    public $timestamps = false;

    protected $primaryKey = null;

    public $incrementing = false;

    protected $fillable = [
        'pv_id',
        'role_id',
        'title',
        'display_as',
        'grade',
    ];

    public function appUsers(): HasMany
    {
        return $this->hasMany(AppUser::class, 'role', 'role_id');
    }

    public function accesses(): HasMany
    {
        return $this->hasMany(RoleAccess::class, 'role_id', 'role_id');
    }
}
