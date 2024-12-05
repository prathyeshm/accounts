<?php

namespace Prathyeshm\Accounts\Controller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;


class AccountController extends Controller
{

    public function index()
    {
        return view('accounts::home');
    }
}
