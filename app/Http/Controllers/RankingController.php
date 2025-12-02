<?php

namespace App\Http\Controllers;

use App\Models\Result;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class RankingController extends Controller
{
    public function index()
    {
        $top5 = Result::with('user')
            ->orderByDesc('score')
            ->take(5)
            ->get();

        return Inertia::render('Ranking/Index', [
            'top5' => $top5
        ]);
    }

    public function myRanking()
    {
        $results = Result::where('user_id', Auth::id())
            ->orderByDesc('score')
            ->get();

        return Inertia::render('Ranking/MyRanking', [
            'results' => $results
        ]);
    }
}
