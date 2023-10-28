<?php

use App\Http\Controllers\FundWallet;
use App\Http\Controllers\Saving\Addfund;
use App\Http\Controllers\Saving\Withdrawfund;
use Illuminate\Support\Facades\Route;



Route::middleware('auth')->group(function () {
    Route::post('/save-fund', Addfund::class)->name('save-fund');
    Route::post('/withdraw', Withdrawfund::class)->name('withdraw-fund');
    Route::post('/wallet-fund', FundWallet::class)->name('wallet.fund');
});