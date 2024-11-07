<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Materi;
use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class MateriController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'user_id' => 'required',

        ]);
        $materi = new Materi();
        $materi->user_id = $request->user_id;
        $materi->title = $request->title;
        $materi->body = $request->body;
        $materi->save();

        return response()->json(['meessage', 'data berhasil ditambahkan'], 200);
    }

    public function show()
    {
        return view('materi', ['title' => 'Materi']); // Pastikan ini mengarah ke tampilan Anda
    }

    // Metode untuk mengambil data materi dalam format JSON
    public function getMateriData(Materi $materi)
    {
        $materi = Materi::where('user_id', Auth::user()->id)->get();
        return response()->json($materi);
    }

    public function destroy($id)
    {
        $materi = Materi::destroy($id);
        $materies = Materi::all();
    }

    public function materi()
    {

        $kelas = Kelas::all();
        return view('admin.components.create-materi', ['title' => 'create-materi', 'kelas' => $kelas]);
    }
}
