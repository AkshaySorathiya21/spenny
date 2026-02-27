<?php

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoriesController;
use App\Http\Controllers\Admin\NotificationController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\SubscriptionPlanController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

// ── Legal & Support pages ──────────────────────────────────
Route::get('/privacy', function () {
    return view('privacy');
})->name('privacy');

Route::get('/terms', function () {
    return view('terms');
})->name('terms');

Route::get('/support', function () {
    return view('support');
})->name('support');

Route::post('/support', function (Request $request) {
    $request->validate([
        'name'    => 'required|string|max:100',
        'email'   => 'required|email|max:150',
        'topic'   => 'required|string',
        'message' => 'required|string|min:10|max:2000',
    ]);
    return redirect()->route('support')->with('success', 'Your message has been received! We\'ll get back to you within 24 hours.');
})->name('support.submit');

// ── Auth ───────────────────────────────────────────────────
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard.index');

    Route::get('/categories', [AdminCategoriesController::class, 'index'])->name('categories.index');
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/details', [UserController::class, 'show'])->name('users.show');
    Route::get('/transactions', [TransactionController::class, 'index'])->name('transactions.index');
    Route::get('/settings', [SettingController::class, 'index'])->name('settings.index');
    Route::get('/subscriptions', [SubscriptionPlanController::class, 'index'])->name('subscriptions.index');
    Route::get('/notifications', [NotificationController::class, 'index'])->name('notifications.index');
});