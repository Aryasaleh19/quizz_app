<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\ResultController;
use App\Models\Materi;
use App\Models\Quiz;
use App\Models\User;
use Illuminate\Auth\Events\Authenticated;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;




Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        $role = Auth::user()->role;
        if ($role == 'siswa') {
            return view('home', ['title' => 'home']);
        } else {
            return back()->with('fail', 'anda bukan siswa');
        }
    });

    Route::get('/success', function () {
        return view('success', ['title' => 'success']);
    });

    Route::post('/api/showResult', [ResultController::class, 'showResult']);
    Route::get('/results', [ResultController::class, 'results'])->name('showResult');

    Route::get('/materi/data', [MateriController::class, 'getMateriData']);

    Route::get('/play', function () {
        $quiz = Quiz::where('user_id', Auth::user()->id)->get();
        return view('play', ['title' => 'play', 'quiz' => $quiz]);
    });

    Route::post('/add-materi', [MateriController::class, 'index']);

    Route::get('/settings', function () {
        return view('settings', ['title' => 'Settings']);
    });

    Route::get('/buttons', function () {
        return view('admin.components.buttons', ['title' => 'Buttons']);
    });
    Route::get('/dashboard', [GuruController::class, 'index'])->name('dashboard');

    Route::get('/quiz', [GuruController::class, 'quiz'])->name('quiz');

    Route::get('/preload', function () {
        return view('layouts.preload', ['title' => 'Preload']);
    });

    Route::get('create-quiz', [QuizController::class, 'createQuiz'])->name('create.quiz');

    Route::post('/play-quiz', [QuizController::class, 'play']);

    Route::get('/materi', [GuruController::class, 'materi'])->name('materi');

    Route::post('/create-quiz', [QuizController::class, 'store']);

    Route::get('/mulai-quiz', [QuizController::class, 'startQuiz']);

    Route::get('/api/get-quiz', [QuizController::class, 'showQuiz']);

    Route::get('/tambah-materi', [UserController::class, 'tambahMateri']);

    Route::get('/api/get-materi-quiz', [GuruController::class, 'getMateri']);

    Route::get('/edit-materi', [UserController::class, 'editMateri']);

    Route::get('/quiz', [GuruController::class, 'quiz']);

    Route::get('/api/get-quiz-list', [QuizController::class, 'getDataQuiz']);

    Route::get('/create-materi', [MateriController::class, 'materi'])->name('create.materi');

    Route::get('/api/get-quiz-siswa', [QuizController::class, 'showQuizSiswa']);

    Route::post('/api/update-score', [QuizController::class, 'updateScore']);

    Route::post('/api/delete-quiz', [QuizController::class, 'deleteQuiz']);
});












Route::post('/logout', [UserController::class, 'Logout']);
Route::post('/login', [UserController::class, 'Login']);
Route::post('/regist', [UserController::class, 'regist'])->name('regist.post');

Route::post('/delete-materi/{id}', [MateriController::class, 'destroy'])->name('delete.materi');
Route::get('/test', function () {
    return view('play-quiz');
});

Route::middleware('guest')->group(function () {

    Route::get('/login', function () {
        $namaSekolah = 'SDN 03 SUWAWA';
        return view('admin.pages.authentication-login', ['title' => 'Login', 'nama_sekolah' => $namaSekolah]);
    })->middleware('guest')->name('login');

    Route::get('/register', function () {
        $namaSekolah = 'SDN 03 SUWAWA';
        return view('admin.pages.authentication-register', ['title' => 'register', 'nama_sekolah' => $namaSekolah]);
    })->name('register');
});
