<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docs extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'front_doc',
        'back_doc',
        'trading_doc',
        'upgraded',
        'status',
        'created_at',
        'updated_at'
    ];
}
