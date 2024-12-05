<?php
use Prathyeshm\Accounts\Controller\AccountController;
use Illuminate\Support\Facades\Route;


Route::prefix('accounts')->group(function () {
    Route::get('/', [AccountController::class, 'index']);
   
});



// Route::get('/accounts', [AccountController::class, 'index']);