<?php

namespace App\Http\Controllers\vp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Request as RequestModel;

class DashboardController extends Controller
{
    public function index()
    {
        $peneliti = User::count();
        $transactions = RequestModel::count();
        $setuju = RequestModel::where('status','diajukan')->count();

        return view('pages.vp.dashboard', [
            'customer' => $peneliti,
            'transactions' => $transactions,
            'setuju' => $setuju,
        ]);
    }
}
