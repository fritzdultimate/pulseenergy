<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Limits extends Model
{
    use HasFactory;

    protected $fillable = [
        'tier_deposit_limit',
        'tier_withdrawal_limit',
        'tier_reinvestment_limit'
    ];
}
