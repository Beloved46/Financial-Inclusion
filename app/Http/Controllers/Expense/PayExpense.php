<?php

namespace App\Http\Controllers\Expense;

use App\Exceptions\PaymentException;
use App\Models\BillPayment;
use App\Models\Transaction;
use App\Trait\TransactionTrait;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PayExpense extends Controller
{
    use TransactionTrait;

    /**
     * Handle the incoming request.
     */
    public function __invoke(BillPayment $expense)
    {
        try {
            $user = Auth::user();

            if ($expense->amount > $user->wallet->amount) {
                throw new PaymentException("You have insufficient money in your wallet to make this payment");
            }
            
            DB::transaction(function () use ($expense, $user) {
                $expense->update(['is_paid' => true, 'user_id' => auth()->user()->id]);

                $walletBalance = $user->wallet->amount - $expense->amount;

                $user->wallet()->update(['amount' => $walletBalance]);

                $this->createTransaction($expense->amount, Transaction::DEBIT, 'payment for '. $expense->name);
            });

            return back()->with('success','payment for '. $expense->name .' successfully completed');

        }catch (PaymentException $e) {
            return back()->with('error', $e->getMessage());
        }catch (\Throwable $th) {
            return back()->with('error', ' an error occurred while processing payment');
        }
    }
}
