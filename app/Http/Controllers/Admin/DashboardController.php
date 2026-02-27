<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalUsers = User::count();
        $totalTransactions = Transaction::count();
        $totalCategories = Category::count();
        $recentTransactions = Transaction::latest()->take(5)->get();

        return view('admin.dashboard.index', compact(
            'totalUsers',
            'totalTransactions',
            'totalCategories',
            'recentTransactions'
        ));
    }
}
