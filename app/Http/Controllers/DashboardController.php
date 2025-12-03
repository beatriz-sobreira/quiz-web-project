<?php

namespace App\Http\Controllers;

use App\Models\Result;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index()
    {
        $top5 = Result::with('user')
            ->orderByDesc('score')
            ->take(5)
            ->get();

        $myTop5 = Result::where('user_id', Auth::id())
            ->orderByDesc('score')
            ->take(5)
            ->get();

        return Inertia::render('Dashboard', [
            'top5' => $top5,
            'myTop5' => $myTop5,
        ]);
    }
}
