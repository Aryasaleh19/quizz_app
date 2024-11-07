<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\Materi;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GuruController extends Controller
{
    public function index()
    {
        $namaSekolah = "SDN 03 SUWAWA";
        $role = Auth::user()->role;
        if ($role != 'guru') {
            return back()->with('fail', 'anda harus login sebagai guru');
        } else {
            $data = session('data');
            $datas = response()->json(['data' => $data]);
            return view('admin.dashboard', ['title' => 'Dashboard', 'quiz' => Quiz::count(), 'data' => $data, 'nama_sekolah' => $namaSekolah]);
        }
    }


    public function quiz()
    {
        $quiz = Quiz::where('user_id', Auth::user()->id)->get();

        $data = session('data');
        return view('admin.components.quiz', ['title' => 'Create Quiz', 'data' => $data, 'quiz' => $quiz]);
    }

    public function materi()
    {
        $materi = Materi::where('user_id', Auth::user()->id)->get();
        return view('admin.components.materi', ['title' => 'Materi', 'materi' => $materi]);
    }

    public function getMateri()
    {
        $materi = Materi::where('user_id', Auth::user()->id)->get();
        return response()->json(['data' => $materi]);
    }
}
