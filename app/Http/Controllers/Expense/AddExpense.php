<?php

namespace App\Http\Controllers\Expense;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddExpenseRequest;
use App\Models\BillPayment;
use Illuminate\Http\Request;

class AddExpense extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(AddExpenseRequest $request)
    {
        try {

            BillPayment::create($request->validated());

            return back()->with("success","Expense added successfully");

        } catch (\Throwable $th) {
            return back()->with("error", 'an error occurred while creating tpayment');
        }
    }
}
