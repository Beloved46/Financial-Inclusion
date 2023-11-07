<?php

namespace App\Http\Controllers\Expense;

use App\Models\BillPayment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AddExpenseRequest;

class AddExpense extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(AddExpenseRequest $request)
    {
        try {

            BillPayment::create(array_merge($request->validated(), ['user_id' => Auth::user()->id]));

            return back()->with("success","Expense added successfully");

        } catch (\Throwable $th) {
            return back()->with("error", 'an error occurred while creating tpayment');
        }
    }
}
