<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Trait\TransactionTrait;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Exceptions\WalletFundException;
use App\Http\Requests\FundWalletRequest;

class FundWallet extends Controller
{
    use TransactionTrait;

    /**
     * Handle the incoming request.
     */
    public function __invoke(FundWalletRequest $request)
    {
        try {

            $user = User::find(Auth::user()->id);

            switch ($request->type) {
                case 'account_balance':

                    if ($request->amount > $user->account_balance) {
                        throw new WalletFundException("You have insufficient fund in your account", );
                    }

                   DB::transaction(function () use($user, $request){
                    $walletAmount =  $user->wallet->amount ?? 0;

                     if (blank($user->wallet)){
                        $user->wallet()->create([
                            'amount' =>  $request->amount,
                            'type' => 'wallet funding',
                        ]);
                       
                    } else {
                        
                        $user->wallet()->update(['amount' => $walletAmount + $request->amount]);
                    }
                    

                    $balance = $user->account_balance - $request->amount;

                    $user->update(['account_balance' => $balance]);

                    $this->createTransaction($request->amount, $request->type, 'wallet funding');
                   });

                    # code...
                    break;

                case 'savings':
                    if ($request->amount > $user->savings) {
                        throw new WalletFundException("You have insufficient fund in your savings", );
                    }

                   DB::transaction(function () use($request, $user) {
                    $walletAmount =  $user->wallet->amount ?? 0;

                     if (blank($user->wallet)){
                        $user->wallet()->create([
                            'amount' =>  $request->amount,
                            'type' => 'wallet funding',
                        ]);
                       
                    } else {
                        
                        $user->wallet()->update([
                            'amount' => $walletAmount + $request->amount,
                            
                        ]);
                    }

                    $balance = $user->savings - $request->amount;

                    $user->update(['savings' => $balance]);

                    $this->createTransaction($request->amount, $request->type, 'wallet funding');
                   });
                    break;
                default:
                    # code...
                    break;
            }

            return back()->with('success', 'wallet funded successfully');
        
        }catch (WalletFundException $e){
            return back()->with('error', $e->getMessage());

        }catch (\Throwable $th) {
            return back()->with('error', $th->getMessage() . 'an error occurred in funding wallet');
        }
    }
}
