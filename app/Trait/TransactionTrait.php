<?php


namespace App\Trait;

use App\Models\Transaction;

trait TransactionTrait
{
    
    public function createTransaction($amount, string $type, string $description) : Transaction
    {
        return Transaction::create([
            'amount' => $amount,
            'user_id' => auth()->user()->id,
            'type' => $type,
            'descriptions' => $description,
            'reference_no' => uniqid(),
        ]);
    }
}

