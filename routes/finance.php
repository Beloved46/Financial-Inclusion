<?php

use App\Http\Controllers\FundWallet;
use Illuminate\Support\Facades\Route;

Route::post('/wallet-fund', FundWallet::class)->middleware(['auth'])->name('wallet.fund');