<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubscriptionPlanController extends Controller
{
    public function index(){
        return response()->view('admin.subscriptions.index');
    }
}
