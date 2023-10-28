<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    public const CREDIT = 'credit';

    public const DEBIT = 'debit';

    protected $fillable = [
        'amount',
        'type',
        'description',
        'user_id',
        'reference_no',
    ];

   
}
