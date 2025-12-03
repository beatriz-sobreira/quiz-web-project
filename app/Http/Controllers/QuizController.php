<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class QuizController extends Controller
{
    public function start()
    {
        $quiz = Quiz::with('questions.options')->first(); // pega o primeiro quiz real do banco

        return Inertia::render('Quiz/Start', [
            'quiz' => $quiz
        ]);
    }

    public function show($id)
    {
        $quiz = Quiz::with('questions.options')->findOrFail($id);

        $questions = $quiz->questions->shuffle()->take(10);

        return Inertia::render('Quiz/Index', [
            'quiz' => $quiz,
             'questions' => $questions->values()
        ]);
    }

    public function store(Request $request, $id)
    {
        $quiz = Quiz::findOrFail($id);

        $data = $request->validate([
            'score' => 'required|integer',
            'total_questions' => 'required|integer',
        ]);

        Result::create([
            'user_id' => Auth::id(),
            'quiz_id' => $quiz->id,
            'score' => $data['score'],
            'total_questions' => $data['total_questions'],
        ]);

        return redirect()->route('dashboard')->with('success', 'Quiz finalizado!');
    }
}
