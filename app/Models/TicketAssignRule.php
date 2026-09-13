<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketAssignRule extends Model
{
    use HasFactory;

    protected $table = 'ticket_assign_rule';

    public $timestamps = false;

    protected $fillable = [
        'cat_ids',
        'rule_type',
        'rule_id',
        'status',
    ];
}
