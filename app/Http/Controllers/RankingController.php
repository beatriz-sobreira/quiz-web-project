<?php

namespace App\Http\Controllers;

use App\Models\Result;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class RankingController extends Controller
{

    public function index()
    {
        $results = Result::with('user')
            ->orderByDesc('score')
            ->orderBy('time_spent', 'asc')
            ->take(5)
            ->get();

            return Inertia::render('Ranking/Index', [
                'results' => $results
            ]);
    }

    public function verMais()
    {
       $results = Result::with('user')
            ->orderByDesc('score')
            ->orderBy('time_spent', 'asc')
            ->get();

            return Inertia::render('Ranking/Index', [
                'results' => $results
            ]);
    }

    public function myRanking()
    {
        $results = Result::with('quiz')
            ->where('user_id', Auth::id())
            ->orderByDesc('score')
            ->orderBy('time_spent', 'asc')
            ->get();

        return Inertia::render('Ranking/MyRanking', [
            'results' => $results
        ]);
    }
}
