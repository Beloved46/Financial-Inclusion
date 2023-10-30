<?php

use App\Http\Controllers\Expense\AddExpense;
use App\Http\Controllers\Expense\PayExpense;
use App\Http\Controllers\FundWallet;
use App\Http\Controllers\Saving\Addfund;
use App\Http\Controllers\Saving\Withdrawfund;
use App\Livewire\ChatBot;
use Illuminate\Support\Facades\Route;



Route::middleware('auth')->group(function () {
    Route::post('/save-fund', Addfund::class)->name('save-fund');
    Route::post('/withdraw', Withdrawfund::class)->name('withdraw-fund');
    Route::post('/wallet-fund', FundWallet::class)->name('wallet.fund');

    Route::post('/add-bill', AddExpense::class)->name('add-expense');
    Route::post('/pay-expense/{expense}', PayExpense::class)->name('pay-expense');

    Route::get('/chat-bot', ChatBot::class)->name('chat-bot');
});