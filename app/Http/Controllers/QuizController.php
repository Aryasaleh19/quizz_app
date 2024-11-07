<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\Choice;
use App\Models\Result;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Resources\Json\PaginatedResourceResponse;

class QuizController extends Controller
{

    public function showQuiz()
    {

        $quiz = session('quiz');
        $questions = session('questions');
        $choices = session('choices');
        return response()->json(['data' => $quiz, 'questions' => $questions, 'choices' => $choices]);
    }

    public function startQuiz()
    {
        $user_id = Auth::user()->id;
        $quiz = session('quiz');

        $result = Result::create([
            'score' => 0,
            'user_id' => $user_id,
            'quiz_id' => $quiz->id
        ]);
        $result->save();
        // $quizs = Quiz::where('id', $quiz->id)->get();

        $questions = $quiz->questions()->with('choices')->get();
        return view('playQuiz', ['title' => 'Start Quiz', 'data' => $questions, 'quiz' => $quiz]);
    }
    public function showQuizSiswa()
    {
        $data = session('quiz');
        $quiz = Quiz::where('id', $data->id)->get();
        $questionsData = [];

        foreach ($quiz as $quizz) {
            $questions = $quizz->questions()->get();
            foreach ($questions as $q) {
                $choices = Choice::where('question_id', $q->id)->get();
                $questionsData[] = [
                    'question' => $q,
                    'choices' => $choices
                ];
            }
            return response()->json(['quiz_id' => $quizz->id, 'questions' => $questionsData]);
        }
    }
    public function play(Request $request)
    {

        $user_id = Auth::user()->id;
        $token = $request->token;
        $quiz = Quiz::where('token', $token)->first();

        if ($quiz == null) {
            return response()->json('quiz not found', 404);
        }

        $validate = $quiz->results()->where('user_id', $user_id)->where('quiz_id', $quiz->id)->get();

        // if ($validate->count() > 0) {
        //     return response()->json('anda sudah mengerjakan kuis ini', 404);
        // }

        $quiz = session(['quiz' => $quiz]);

        return response()->json(['data' => $quiz]);
    }

    public function getDataQuiz(Request $request)
    {
        $quiz = Quiz::where('user_id', Auth::user()->id)->get();

        return response()->json(['data' => $quiz]);
    }

    public function index()
    {
        return view('admin.components.quiz', ['title' => 'Create Quiz']);
    }

    public function createQuiz()
    {
        return view('admin.components.create-quiz', ['title' => 'Create Quiz']);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'start_time' => 'nullable',
            'end_time' => 'nullable',
            'questions' => 'required|array',
            'questions.*.text' => 'required|string',
            'questions.*.options' => 'required|array',
            'questions.*.options.*' => 'required|string',
            'questions.*.correct_option' => 'required|integer'
        ]);

        $quiz = Quiz::create([
            'title' => $request->title,
            'description' => $request->deskripsi,
            'body' => 'test',
            'user_id' => Auth::user()->id,
            'token' => random_int(100000, 999999),
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'status' => 'pending'
        ]);

        foreach ($request->questions as $questionData) {

            $quiz_id = $quiz->id;
            $question = $quiz->questions()->create([
                'quiz_id' => $quiz_id,
                'question_text' => $questionData['text'],
                'is_correct' => $questionData['correct_option']
            ]);
            foreach ($questionData['options'] as $index => $optionText) {
                $isCorrect =  [0, 1, 2, 3];
                $correctOptionIndex = (int) $questionData['correct_option'];
                $question->choices()->create([
                    'text' => $optionText,
                    'question_id' => $question->id,
                    'is_correct' => $index === $correctOptionIndex ? 1 : 0
                ]);
            }
        }
        return response()->json(['message' => 'Kuis berhasil disimpan'], 201);
    }
    public function updateScore(Request $request)
    {
        $score = $request->score;
        $user_id = $request->user_id;
        $quiz_id = $request->quiz_id;
        var_dump($score, $user_id, $quiz_id);

        $result = Result::where('user_id', $user_id)->where('quiz_id', $quiz_id)->update([
            'score' => $score
        ]);
    }

    public function deleteQuiz(Request $request, Quiz $Quiz)
    {
        $request->validate([
            'id' => 'required'
        ]);
        $user_id = Auth::user()->id;

        $delete = $Quiz->destroy($request->id);
        // $request->user()->quizzes()->where('id', $request->id)->delete();
        // $delete = Quiz::destroy('id', $request->id)->where('user_id', $user_id);

        // $delete = Quiz::destroy($delete);
    }
}
