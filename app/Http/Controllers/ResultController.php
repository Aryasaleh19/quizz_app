<?php

namespace App\Http\Controllers;

use App\Models\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResultController extends Controller
{
    public function showResult(Request $request)
    {
        $quiz_id = $request->quiz_id;
        $result = Result::where('quiz_id', $quiz_id)->orderBy('score', 'DESC')->get();

        $data = session(['resultQuiz' => $result]);
        return response()->json(['data' => $data, 'success' => 'sukses mengirim data'], 200);
    }

    public function results(Request $request)
    {
        $data = session('resultQuiz');
        return view('results', ['title' => 'Results', 'data' => $data]);
    }
}
