<?php

namespace App\Http\Controllers\Saving;

use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\SavingsRequest;
use App\Exceptions\WalletFundException;
use App\Trait\TransactionTrait;

class Withdrawfund extends Controller
{
    use TransactionTrait;
    
    /**
     * Handle the incoming request.
     */
    public function __invoke(SavingsRequest $request)
    {
        try {
            if (Auth::user()->savings < $request->amount) {
                throw new WalletFundException("The amount in your savings account is insufficient to withdraw from");
            }

            $totalSavings = Auth::user()->savings - $request->amount;

            $acountBalance = Auth::user()->account_balance + $request->amount;

            Auth::user()->update(['savings' => $totalSavings, 'account_balance' => $acountBalance]);

            $this->createTransaction($request->amount, Transaction::DEBIT, 'savings account debited');

            return back()->with('success',$request->amount .' has been withdrawn to your bank account');

        } catch (WalletFundException $e) {
            return back()->with('error',$e->getMessage());
        }catch (\Throwable $th) {

            return back()->with('error','an error occurred while withdrawing funds ');
        }
    }
}
