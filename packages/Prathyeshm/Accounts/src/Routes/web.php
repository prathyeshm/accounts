<?php

use Illuminate\Support\Facades\Route;
use Prathyeshm\Accounts\Controller\AccountController;

// Route::prefix('accounts')->group(function () {
//     Route::get('/', [AccountController::class, 'index'])->name('accounts.index');
   
// });



Route::get('/', [AccountController::class, 'index']);