<?php

namespace App\Http\Controllers\Saving;

use App\Exceptions\WalletFundException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Trait\TransactionTrait;
use Illuminate\Support\Facades\Auth;

class Addfund extends Controller
{
    use TransactionTrait;

    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        try {
            if (Auth::user()->account_balance < $request->amount) {
                throw new WalletFundException("The amount in your account is insufficient to save from");
            }
            $totalSavings = Auth::user()->savings + $request->amount;

            $acountBalance = Auth::user()->account_balance - $request->amount;

            Auth::user()->update(['savings' => $totalSavings, 'account_balance' => $acountBalance]);

            $this->createTransaction($request->amount, Transaction::CREDIT, 'savings account fund');
            
            return back()->with('success',$request->amount .' has been added to your savings');

        } catch (WalletFundException $e) {
            return back()->with('error',$e->getMessage());
        }catch (\Throwable $th) {

            return back()->with('error','an error occurred while saving ' . $request->amount);
        }
    }
}
