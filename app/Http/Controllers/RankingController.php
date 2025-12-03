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
        $results = Result::where('user_id', Auth::id())
            ->orderBy('created_at') 
            ->get()
            ->map(function ($result, $index) {
                $result->partida_num = $index + 1; 
                return $result;
            })
            ->sortByDesc('score') 
            ->values(); 

            return Inertia::render('Ranking/MyRanking', [
                'results' => $results
            ]);
    }
}
