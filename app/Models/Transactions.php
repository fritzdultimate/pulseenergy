<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transactions extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $fillable = [
        'currency',
        'amount',
        'transaction_hash',
        'created_at',
        'updated_at',
        'deleted_at',
        'type',
        'transaction_id'
    ];

    public function deposit() {
        return $this->belongsTo(Deposit::class, 'transaction_id');
    }
    public function withdrawal() {
        return $this->belongsTo(Withdrawal::class, 'transaction_id');
    }
}
